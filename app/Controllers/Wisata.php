<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\WisataModel;

class Wisata extends BaseController
{
    protected $wisata;
    public function __construct()
    {
        $this->wisata = new WisataModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Wisata | Objek Wisata',
            'hal' => 'Table Objek Wisata'
        ];
        if (session()->get('logged_in') == true) {
            $data['wisata'] = $this->wisata->findAll();
            return view('wisata/index', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function add()
    {
        $data = [
            'title' => 'Table Tambah Objek Wisata'
        ];
        if (session()->get('logged_in') == true) {
            return view('wisata/add', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function save()
    {
        if (session()->get('logged_in') == true) {
            $nama_wisata = $this->request->getVar('nama_wisata');
            $deskripsi = $this->request->getVar('deskripsi');
            $harga = $this->request->getVar('harga');
            $foto = $this->request->getFile('foto');
            $foto->move(WRITEPATH . '../public/foto');

            $data = [
                'nama_wisata' => $nama_wisata,
                'deskripsi' => $deskripsi,
                'foto' => $foto->getClientName(),
                'harga' => $harga

            ];
            $this->wisata->save($data);

            return redirect()->to('wisata');
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function edit($id)
    {
        if (session()->get('logged_in') == true) {
            $data = [
                'title' => 'Table Edit Data Wisata'
            ];
            $data['cari'] = $this->wisata->where(['id_wisata' => $id])->first();
            return view('wisata/edit', $data);
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function update()
    {
        if (session()->get('logged_in') == true) {
            $id_wisata = $this->request->getVar('id_wisata');
            $nama_wisata = $this->request->getVar('nama_wisata');
            $deskripsi = $this->request->getVar('deskripsi');
            $harga = $this->request->getVar('harga');
            $foto = $this->request->getFile('foto');
            $foto->move(WRITEPATH . '../public/foto');

            $data = [
                'id_wisata' => $id_wisata,
                'nama_wisata' => $nama_wisata,
                'deskripsi' => $deskripsi,
                'foto' => $foto->getClientName(),
                'harga' => $harga

            ];
            $this->wisata->save($data);

            return redirect()->to('wisata');
        } else {
            return redirect()->to('admin/login');
        }
    }

    public function delete($id)
    {
        if (session()->get('logged_in') == true) {
            $this->wisata->delete($id);
            return redirect()->to('wisata');
        } else {
            return redirect()->to('admin/login');
        }
    }
}
