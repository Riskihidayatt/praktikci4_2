<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test_view', 'Test_view::index');

// karyawan vaksin
$routes->get('/employee', 'Employee::index');
$routes->post('/employee/add', 'Employee::add');
$routes->get('/employee/edit/(:any)', 'Employee::edit/$1');
$routes->post('/employee/update/', 'Employee::update/$1');
$routes->get('/employee/hapus/(:any)', 'Employee::hapus/$1');
$routes->post('/employee/hapus/', 'Employee::hapus/$1');

// pegawai
$routes->get('/pegawai', 'Pegawai::index');
$routes->post('/pegawai/add', 'Pegawai::add');
$routes->get('/pegawai/edit/(:any)', 'Pegawai::edit/$1');
$routes->post('/pegawai/update/', 'Pegawai::update/$1');
$routes->get('/pegawai/hapus/(:any)', 'Pegawai::hapus/$1');
$routes->post('/pegawai/hapus/', 'Pegawai::hapus/$1');

// potongan
$routes->get('/potongan', 'Potongan::index');
$routes->post('/potongan/add', 'Potongan::add');
$routes->get('/potongan/edit/(:any)', 'Potongan::edit/$1');
$routes->post('/potongan/update/', 'Potongan::update/$1');
$routes->get('/potongan/hapus/(:any)', 'Potongan::hapus/$1');
$routes->post('/potongan/hapus/', 'Potongan::hapus/$1');

// bendahara
$routes->get('/bendahara', 'Bendahara::index');
$routes->post('/bendahara/add', 'Bendahara::add');
$routes->get('/bendahara/edit/(:any)', 'Bendahara::edit/$1');
$routes->post('/bendahara/update/', 'Bendahara::update/$1');
$routes->get('/bendahara/hapus/(:any)', 'Bendahara::hapus/$1');
$routes->post('/bendahara/hapus/', 'Bendahara::hapus/$1');

// tunjangan
$routes->get('/tunjangan', 'Tunjangan::index');
$routes->post('/tunjangan/add', 'Tunjangan::add');
$routes->get('/tunjangan/edit/(:any)', 'Tunjangan::edit/$1');
$routes->post('/tunjangan/update/', 'Tunjangan::update/$1');
$routes->get('/tunjangan/hapus/(:any)', 'Tunjangan::hapus/$1');
$routes->post('/tunjangan/hapus/', 'Tunjangan::hapus/$1');

// penggajian
$routes->get('/penggajian', 'Penggajian::index');
$routes->post('/penggajian/add', 'Penggajian::add');
$routes->get('/penggajian/edit/(:any)', 'Penggajian::edit/$1');
$routes->post('/penggajian/update/', 'Penggajian::update/$1');
$routes->get('/penggajian/hapus/(:any)', 'Penggajian::hapus/$1');
$routes->post('/penggajian/hapus/', 'Penggajian::hapus/$1');