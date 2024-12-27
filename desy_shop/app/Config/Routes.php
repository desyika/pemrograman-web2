<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

service('auth')->routes($routes);
$routes->post('/submit', 'Home::submit');

// admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/dashboard', 'AdminController::index');

$routes->get('/admin/daftar-bluse', 'AdminController::daftarbluse');
$routes->get('/admin/daftar-bluse/tambah', 'AdminController::daftarbluseTambah');
$routes->post('/admin/daftar-bluse/tambah', 'AdminController::createbluse');
$routes->get('/admin/daftar-bluse/edit', 'AdminController::daftarbluseEdit');
$routes->get('/admin/daftar-bluse/hapus', 'AdminController::daftarbluseHapus');

$routes->get('/admin/transaksi', 'AdminController::transaksi');
$routes->get('/admin/transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
$routes->get('/admin/transaksi/hapus', 'AdminController::transaksiHapus');

$routes->get('/admin/pelanggan', 'AdminController::pelanggan');
$routes->get('/admin/pelanggan/hapus', 'AdminController::pelangganHapus');

$routes->get('file-image/(:segment)/(:segment)', 'AdminController::image/$1/$2');