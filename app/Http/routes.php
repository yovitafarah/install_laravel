<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

<?php
# Halaman muka, untuk menampilkan semua data biodata yang ada. [localhost:8000/]
Route::get('/', array('as' => 'beranda', 'uses' => 'BiodataController@index'));

# Halaman yang berisi Form inputan Biodata baru [localhost:8000/buat]
Route::get('buat', function(){ return 'Halaman Tambah Biodata'; });

# Memproses Form lalu mengirimnya kedalam database [localhost:8000/buat]
Route::post('buat', function(){ return 'Proses Tambah Biodata'; });

# Menampilkan Biodata perorangan [localhost:8000/lihat/{id}]
Route::get('lihat/{id}', function(){ return 'Halaman Biodata Perorangan'; });

# Form untuk mengubah isi Biodata dalam database [localhost:8000/ubah/{id}]
Route::get('ubah/{id}', function(){ return 'Halaman Ubah Biodata'; });

# Memproses Form lalu mengirim yang baru kedalam database [localhost:8000/ubah/{id}]
Route::put('ubah/{id}', function(){ return 'Proses Perubahan Biodata'; });

# Tindakan untuk menghapus Biodata [localhost:8000/{id}/hapus]
Route::get('hapus/{id}', function(){ return 'Halaman Tambah Biodata'; });

?>