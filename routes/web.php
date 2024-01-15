<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\UsersController;

//user Namespace
use App\Http\Controllers\user\ProfilController;
use App\Http\Controllers\user\UbahPasswordController;
use App\Http\Controllers\user\SiswaController;
use App\Http\Controllers\user\HitungController;
use App\Http\Controllers\user\JadwalController;

//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/profilsekolah', [HomeController::class, 'profilsekolah'])->name('profilsekolah');
Route::get('/kelas1', [HomeController::class, 'kelas1'])->name('kelas1');
Route::get('/kelas2a', [HomeController::class, 'kelas2a'])->name('kelas2a');
Route::get('/kelas2b', [HomeController::class, 'kelas2b'])->name('kelas2b');
Route::get('/kelas3', [HomeController::class, 'kelas3'])->name('kelas3');
Route::get('/kelas4a', [HomeController::class, 'kelas4a'])->name('kelas4a');
Route::get('/kelas4b', [HomeController::class, 'kelas4b'])->name('kelas4b');
Route::get('/kelas5', [HomeController::class, 'kelas5'])->name('kelas5');
Route::get('/kelas6a', [HomeController::class, 'kelas6a'])->name('kelas6a');
Route::get('/kelas6b', [HomeController::class, 'kelas6b'])->name('kelas6b');

Route::get('/auth/login', [RegisterController::class, 'login'])->name('auth.login');
Route::post('/postLogin', [RegisterController::class, 'postLogin'])->name('postLogin');
// Route::get('/auth/register', [RegisterController::class, 'register'])->name('auth.register');
// Route::post('/postRegister', [RegisterController::class, 'postRegister'])->name('postRegister');



//Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/search', [ArtikelController::class, 'search'])->name('artikel.search');

Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show'])->name('artikel.show');

//Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman:slug}', [PengumumanController::class, 'show'])->name('pengumuman.show');

//user
Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => ['auth', 'checklevel:user']], function () {
	Route::name('user.')->group(function () {

		Route::get('/', [UserController::class, 'index'])->name('index');
		Route::get('/profile', [ProfilController::class, 'index'])->name('profile.index');
		Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.index');
		Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
		Route::get('/tambah_siswa', [SiswaController::class, 'tambah'])->name('tambah_siswa.index');
		Route::get('/edit_siswa/{id}', [SiswaController::class, 'edit'])->name('user.edit_siswa');
		Route::get('/deleteSiswa/{id}', [SiswaController::class, 'deleteSiswa'])->name('deleteSiswa');
		Route::get('/change-password', [UbahPasswordController::class, 'index'])->name('change-password.index');
		Route::get('/jadwal-pelajaran', [JadwalController::class, 'index'])->name('jadwal_pelajaran.index');
        Route::get('/jadwal-pelajaran/create', [JadwalController::class, 'create'])->name('create');
		Route::post('/jadwal_pelajaran', 'JadwalController@store')->name('store');
		Route::put('/jadwal-pelajaran/{jadwal}', 'JadwalController@update')->name('jadwal_pelajaran.update');
		Route::get('/jadwal-pelajaran/{jadwal}/edit', 'JadwalController@edit')->name('user.edit_jadwal');
		Route::put('/admin/artikel/{artikel}', 'ArtikelController@update')->name('admin.artikel.update');
		
        Route::get('/jadwal-pelajaran/{jadwal}/edit', [JadwalController::class, 'edit'])->name('edit_jadwal');
        Route::put('/jadwal-pelajaran/{jadwal}', [JadwalController::class, 'update'])->name('jadwal_pelajaran.update');
        Route::delete('/jadwal-pelajaran/{jadwal}', 'JadwalController@destroy')->name('jadwal_pelajaran.destroy');


	});
});

//Admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'checklevel:admin']], function () {
	Route::name('admin.')->group(function () {

		Route::get('/', [UserController::class, 'index'])->name('index');
		Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
		Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('change-password.index');

		//Resource Controller
		Route::resource('users', 'UsersController');
		Route::resource('pengumuman', 'PengumumanController');
		Route::resource('agenda', 'AgendaController');
		Route::resource('artikel', 'ArtikelController');
		Route::resource('kategori-artikel', 'KategoriArtikelController');
	});
});
Route::post('/postTambah', [SiswaController::class, 'postTambah'])->name('postTambah');
Route::post('/postEdit/{id}', [SiswaController::class, 'postEdit'])->name('postEdit');
