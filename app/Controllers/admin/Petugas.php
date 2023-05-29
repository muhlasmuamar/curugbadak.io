<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class Petugas extends BaseController
{
    protected $petugas;
    public function __construct()
    {
        $this->petugas = new AdminModel();
        helper(['form', 'url']);
    }

    public function index()
    {
        $data = [
            'title' => 'Data Petugas | Objek Wisata',
            'hal' => 'Table Petugas Objek Wisata'
        ];
        if (session()->get('logged_in') == true) {
            $data['petugas'] = $this->petugas->findAll();
            return view('admin/petugas/index', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }
    public function add()
    {
        $data = [
            'title' => 'Table Add Petugas | Objek Wisata',

        ];
        if (session()->get('logged_in') == true) {
            $data['petugas'] = $this->petugas->findAll();
            return view('admin/petugas/add', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function save()
    {
        if (session()->get('logged_in') == true) {
            $rules = [
                'nama' => 'required',
                'email' => 'required|valid_email',
                'password' => 'required',
                'u_password' => 'required|matches[password]'

            ];

            $pesan = [
                'nama' => [
                    'required' => 'nama tidak boleh kosong'
                ],
                'email' => [
                    'required' => 'email tidak boleh kosong',
                    'valid_email' => 'format salah'
                ],
                'password' => [
                    'required' => 'password tidak boleh kosong'
                ],
                'u_password' => [
                    'required' => 'Ulang Password',
                    'matches' => 'password harus sama'
                ],
            ];
            if (!$this->validate($rules, $pesan)) {
                $data['validation'] = $this->validator;
                $data = [
                    'title' => 'Table Add Petugas | Objek Wisata',

                ];
                return view('admin/petugas/add', $data);
            }

            $nama = $this->request->getVar('nama');
            $email = $this->request->getVar('email');
            $password = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);

            $data = [
                'nama' => $nama,
                'email' => $email,
                'password' => $password
            ];
            $this->petugas->save($data);
            return redirect()->to('admin/petugas');
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function edit($id)
    {

        $data = [
            'title' => 'Table Ubah Data'
        ];
        if (session()->get('logged_in') == true) {
            $data['cari'] = $this->petugas->where(['id_admin' => $id])->first();
            return view('admin/petugas/edit', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function update()
    {
        if (session()->get('logged_in') == true) {
            $id = $this->request->getVar('id_admin');
            $nama = $this->request->getVar('nama');
            $email = $this->request->getVar('email');
            $password = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);

            if (empty($this->request->getVar('password'))) {
                $data = [
                    'id_admin' => $id,
                    'nama' => $nama,
                    'email' => $email,

                ];
            } else {
                $data = [
                    'id_admin' => $id,
                    'nama' => $nama,
                    'email' => $email,
                    'password' => $password
                ];
            }
            $this->petugas->save($data);
            return redirect()->to('admin/petugas');
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function delete($id)
    {
        if (session()->get('logged_in') == true) {
            $this->petugas->delete($id);
            return redirect()->to('admin/petugas');
        } else {
            return redirect()->to('admin/login');
        }
    }
}
