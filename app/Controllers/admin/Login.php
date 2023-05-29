<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Login extends BaseController
{
    protected $login;
    public function __construct()
    {
        $this->login = new AdminModel();
        helper(['form', 'url']);
    }
    public function index()
    {
        $data = [
            'title' => 'Login | Objek Wisata'
        ];

        return view('admin/login/index', $data);
    }

    public function cek()
    {
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required'
        ];

        $pesan = [
            'email' => [
                'required' => 'email tidak boleh kosong',
                'valid_email' => 'Format Email Salah'
            ],
            'password' => [
                'required' => 'Password tidak boleh Kosong',

            ]
        ];

        if (!$this->validate($rules, $pesan)) {
            $data['validation'] = $this->validator;
            $data = [
                'title' => 'Login'
            ];
            return view('admin/login/index', $data);
        }
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $datalogin = $this->login->where(['email' => $email])->first();
        if ($datalogin) {
            if (password_verify($password, $datalogin->password)) {
                session()->set([
                    'id_admin' => $datalogin->id_admin,
                    'logged_in' => true,
                    'nama' => $datalogin->nama,
                ]);
                return redirect()->to('admin/home');
            } else {
                session()->getFlashdata('error', 'password salah');
                return redirect()->to('admin/login');
            }
            session()->getFlashdata('error', 'Email salah');
            return redirect()->to('admin/login');
        }
    }

    public function keluar()
    {
        session()->destroy();

        return redirect('admin');
    }
}
