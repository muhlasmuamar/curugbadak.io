<?php

namespace App\Controllers;

use App\Models\WisataModel;

class Home extends BaseController
{
    protected $wisata;
    public function __construct()
    {
        $this->wisata = new WisataModel();
    }
    public function index()
    {
        $data = [
            'title' => 'WEB | Object Wisata'
        ];
        $data['wisata'] = $this->wisata->limit(3)->findAll();
        return view('home', $data);
    }

    public function wisata()
    {
        $data = [
            'title' => 'H Wisata'
        ];
        return view('wisata', $data);
    }
}
