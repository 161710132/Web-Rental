<?php

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



Route::get('/', 'Select2Controller@index');
Route::get('/cari', 'Select2Controller@loadData');



Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/tambahrental', function () {
    return view('mobil.tambahrental');
});

	Route::group(['prefix'=>'adminn', 'middleware'=>['auth','role:admin']], function(){
	Route::resource('mobil','MobilController');
	Route::get('daftarmobil','MobilController@daftarmobil')->name('daftarmobil');
	Route::post('mobil/{sewa}', 'MobilController@Sewa')->name('mobil.sewa');
	Route::get('thanks','RentalController@thanks')->name('thanks');
	Route::resource('supir','SupirController');
	Route::resource('rental','RentalController');
	Route::resource('kembali','KembaliController');
	Route::resource('tambah','TambahRental');
	Route::post('supir/{sewa}', 'SupirController@Sewa')->name('supir.sewa');
	Route::get('/rentall/{id}', 'MobilController@tambahrental')->name('rentall');
	Route::post('beritas/{publish}', 'MobilController@Publish')->name('beritas.publish');
	Route::get('/kembali/{id}', 'KembaliController@creates')->name('kembali');
	



	

});
	Route::get('daftarmobil','MobilController@daftarmobil')->name('daftarmobil');

//member 

Route::group(['prefix'=>'member', 'middleware'=>['auth','role:member']], function(){
Route::resource('karyawan','KaryawanController');
Route::resource('rentalkaryawan','RentalController');
Route::resource('kembalikaryawan','KembaliController');
Route::get('thanks','KaryawanController@thanks')->name('thanks');
Route::get('mobil','KaryawanController@mobil')->name('mobil');
Route::get('supir','KaryawanController@supir')->name('supir');
Route::get('rental','KaryawanController@rental')->name('rental');
Route::get('kembali','KaryawanController@kembali')->name('kembali');
Route::get('/showsupir/{id}','KaryawanController@showsupir')->name('showsupir');
Route::get('/showrental/{id}','KaryawanController@showrental')->name('showrental');
// Route::get('/createkembali/{id}','KaryawanController@createkembali')->name('createkembali');
// Route::post('/createkembali/{id}','KaryawanController@storekembali')->name('createkembali');
Route::resource('member','MemberController');

Route::resource('memberrental','RentalmemberController');
Route::resource('membersupir','SupirmemberController');
}); 


Route::get('/kembali', function () {
    return view('kembali.create');
});





	 



