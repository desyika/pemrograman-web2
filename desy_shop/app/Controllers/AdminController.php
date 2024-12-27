<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }
    public function daftarbluse()
    {
        $modelbluse = model('bluseModel');
        $data['bluse'] = $modelbluse->findAll();

        return view('admin/daftar-bluse', $data);
    }
    public function daftarbluseTambah()
    {
        return view('admin/daftar-bluse-tambah');
    }
    public function createbluse(){
        $data = $this->request->getPost();
        $file = $this->request->getFile('katalog');

        if(!$file->hasMoved()){
            $path = $file->store();
            $data['katalog'] = $path;
        }

        $bluseModel = model('bluseModel');

        if($bluseModel->insert($data, false)){
            return redirect()->to('admin/daftar-bluse')->with('sukses', 'data berhasil disimpan');
        }else{
            return redirect()->to('admin/daftar-bluse')->with('eror', 'data gagal disimpan');
        }

        $bluseModel->save($data);
    }
    public function daftarbluseEdit()
    {
        return view('admin/daftar-bluse-edit');
    }
    public function daftarbluseHapus()
    {
        return view('admin/daftar-bluse-hapus');
    }
    public function transaksi()
    {
        return view('admin/transaksi');
    }
    public function transaksiUbahStatus()
    {
        return view('admin/transaksi-ubah-status');
    }
    public function transaksiHapus()
    {
        return view('admin/transaksi-hapus');
    }
    public function pelanggan()
    {
        return view('admin/pelanggan');
    }
    public function pelangganHapus()
    {
        return view('admin/pelanggan-hapus');
    }

    public function image($folder, $file){
        return $this->response->download(WRITEPATH . 'uploads/' . $folder . '/' . $file, null);
    }
}