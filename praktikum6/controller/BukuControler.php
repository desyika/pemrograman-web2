<?php

require_once 'Model/listbuku.php';

class bukucontroller{
    public function jalankan(){
        
        //menggunakan model
        $daftar_buku_model = new listbuku();
        $daftar_buku = $daftar_buku_model->getdata();

        //menampilkan data ke view
        include_once "View/bukuview.php";
    }
}