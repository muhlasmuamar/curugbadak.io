<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Objek Wisata',
            'hal' => 'Halaman Home'
        ];
        if (session()->get('logged_in') == TRUE) {
            return view('admin/home', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }
}
