<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->get('/', 'Home::index');
$routes->get('/pembayaran_ukt', 'Dashboard_mhs::pembayaran_ukt');
$routes->get('/biodata', 'Dashboard_mhs::biodata');
$routes->get('/sell_barang', 'Dashboard_mhs::sell_barang');
$routes->get('/add_barang', 'Dashboard_mhs::add_barang');
$routes->get('/infopembayaran', 'Dashboard_mhs::infopembayaran');
$routes->get('/form_pmb', 'Home::formpmb');
$routes->get('/koperasi', 'Home::koperasi');
$routes->get('/penilaianmahasiswa', 'Dashboard_mhs::index');
$routes->get('/penilaianmhs', 'Dashboard_mhs::penilaianmhs_a');
$routes->get('/penilaianmhs2', 'Dashboard_mhs::penilaianmhs_b');
$routes->get('/penilaianmhs3', 'Dashboard_mhs::penilaianmhs_c');
$routes->get('/penilaianmhs4', 'Dashboard_mhs::penilaianmhs_d');
$routes->get('/penilaianmhs5', 'Dashboard_mhs::penilaianmhs_e');
$routes->get('/penilaianmhs6', 'Dashboard_mhs::penilaianmhs_f');
$routes->get('/penilaianmhs7', 'Dashboard_mhs::penilaianmhs_g');
$routes->get('/penilaianmhs8', 'Dashboard_mhs::penilaianmhs_h');

$routes->get('/Seminar_a', 'Akademik::Seminar1');
$routes->get('/Seminar_b', 'Akademik::Seminar2');
$routes->get('/Seminar_c', 'Akademik::Seminar3');
$routes->get('/Seminar_d', 'Akademik::Seminar4');


















$routes->get('/peraturan', 'Akademik::peraturan');
$routes->get('/datadosen', 'Profil::data_dosen');
$routes->get('/galeri', 'Profil::galeri');
$routes->get('/s_kampus', 'Profil::s_kampus');
$routes->get('/pr', 'Profil::pr');
$routes->get('/prak', 'Profil::prak');
$routes->get('/mahasiswaberprestasi', 'Home::mahasiswaberprestasi');

// FASILITAS 
$routes->get('/perpus', 'Fasilitas::perpus');
$routes->get('/fasilitas', 'Fasilitas::fasilitas');
$routes->get('/anggota_perpus', 'Fasilitas::anggota_perpus');



//DASHBOARD MHS
$routes->get('/admin', 'Dashboard_mhs::index');
$routes->get('/home', 'Dashboard_mhs::home');
$routes->get('/icon_list', 'Dashboard_mhs::icon_list');
$routes->get('/kontak_form', 'Home::kontak_form');



$routes->get('/koperasi', 'Koperasi::index');
$routes->get('/mahasiswa_aktif', 'Mhs::m_aktif');

$routes->get('/', 'Home::index');
$routes->get('/nilai', 'Home::nilai');
$routes->get('/laporan_ta', 'Home::laporan_ta');


// LAYANAN APLIKASI 
$routes->get('/f_alumni', 'Layanan_app::data_alumni');
$routes->get('/alumni', 'Layanan_app::form_alumni');
$routes->get('/pmb', 'Layanan_app::pmb');
$routes->get('/event_berita', 'Layanan_app::event_berita');


//AKADEMIK
$routes->get('/kalenderakademik', 'Akademik::page2');
$routes->get('/kalender', 'Akademik::kalender');
$routes->get('/info_beasiswa', 'Akademik::beasiswa');
$routes->get('/seminar', 'Akademik::seminar');


//ORGANISASI
$routes->get('/ukm', 'Ukm::index');
$routes->get('/bem', 'Ukm::bem');
$routes->get('/calon_mahasiswa', 'Home::calon_mahasiswa');

// FAKULTAS
$routes->get('/fakultas', 'Home::fakultas');
$routes->get('/prodi', 'Home::prodi');



// Seminar
$routes->get('/seminar', 'Akademik::seminar');
$routes->get('/seminar_a', 'Akademik::seminar_a');
$routes->get('/seminar_b', 'Akademik::seminar_b');
$routes->get('/seminar_c', 'Akademik::seminar_c');
$routes->get('/seminar_d', 'Akademik::seminar_d');
$routes->get('/jadwal_perkulian', 'Akademik::jadwal_perkuliahan');


//PROFIL
$routes->get('/pegawai', 'Profil::pegawai');
$routes->get('/struktur', 'Profil::struktur');
$routes->get('/visimisi', 'Profil::visi_misi');
$routes->get('/sejarah', 'Profil::sejarah');
$routes->get('/data_dosen', 'Profil::data_dosen');



//JURNAL
$routes->get('/detailjurnal/dinamika', 'Layanan_app::dinamika_jurnal');
$routes->get('/detailjurnal/eduscope', 'Layanan_app::eduscope_jurnal');
$routes->get('/detailjurnal/saintekbu', 'Layanan_app::saintekbu_jurnal');
$routes->get('/detailjurnal/newton', 'Layanan_app::newton_jurnal');
$routes->get('/detailjurnal/schoolar', 'Layanan_app::schoolar_jurnal');
$routes->get('/detailjurnal/income', 'Layanan_app::income_jurnal');
$routes->get('/detailjurnal/jumat_keagamaan', 'Layanan_app::keagamaan_jurnal');
$routes->get('/detailjurnal/jumat_ekonomi', 'Layanan_app::ekonomi_jurnal');
$routes->get('/detailjurnal/jumat_pertanian', 'Layanan_app::pertanian_jurnal');
$routes->get('/detailjurnal/jumat_pendidikan', 'Layanan_app::pendidikan_jurnal');
$routes->get('/detailjurnal/multidicipline', 'Layanan_app::multidicipline_jurnal');
$routes->get('/jurnal', 'Layanan_app::jurnal');









if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
