<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'DefaultControl/homepage';
$route['404_override'] = 'DefaultControl/error_page';
$route['translate_uri_dashes'] = TRUE;


// berita
$route['berita'] = 'Berita';
$route['berita/(:num)/(:any)'] = 'Berita/view/$1/$2';

// artikel
$route['artikel'] = 'Artikel';
$route['artikel/(:num)/(:any)'] = 'Artikel/view/$1/$2';

// kreatifitas
$route['kreativitas'] = "Kreatifitas";

// gallery
$route['gallery'] = 'Gallery';

// story jurusan
$route['story-jurusan'] = 'StoryJurusan';
$route['story-jurusan/(:any)'] = 'StoryJurusan/jurusan/$1';

// tentang
$route['tentang'] = 'DefaultControl/tentang';

// administrator
$route['administrator'] = 'Administrator';
$route['administrator/dashboard'] = 'Administrator/dashboard';
$route['administrator/berita'] = 'Administrator/berita';
$route['administrator/berita/tambah'] = 'Administrator/berita_tambah';
$route['administrator/berita/hapus'] = 'Administrator/berita_hapus';
$route['administrator/berita/berita_toggle'] = 'Administrator/berita_toggle';
$route['administrator/berita/edit/(:num)'] = 'Administrator/berita_edit/$1';

$route['administrator/artikel'] = 'Administrator/artikel';
$route['administrator/artikel/tambah'] = 'Administrator/artikel_tambah';

$route['administrator/siswa'] = 'Administrator/siswa';
$route['administrator/siswa/siswa_toggle'] = 'Administrator/siswa_toggle';
$route['administrator/siswa/tambah'] = 'Administrator/siswa_tambah';
$route['administrator/siswa/hapus'] = 'Administrator/siswa_hapus';
$route['administrator/siswa/search'] = 'Administrator/siswa_search';
$route['administrator/siswa/edit/(:any)'] = 'Administrator/siswa_edit/$1';

$route['administrator/kelas'] = 'Administrator/kelas';
$route['administrator/kelas/tambah'] = 'Administrator/kelas_tambah';
$route['administrator/kelas/edit/(:num)'] = 'Administrator/kelas_edit/$1';
$route['administrator/kelas/hapus/(:num)'] = 'Administrator/kelas_hapus/$1';

$route['administrator/jurusan'] = 'Administrator/jurusan';
$route['administrator/jurusan/tambah'] = 'Administrator/jurusan_tambah';
$route['administrator/jurusan/hapus'] = 'Administrator/jurusan_hapus';
$route['administrator/jurusan/edit/(:any)'] = 'Administrator/jurusan_edit/$1';

// login
$route['masuk'] = 'Login';
