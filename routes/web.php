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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('/about/1', function(){
	return view('about.satu');
});

Route::get('/about/2', function(){
	return view('about.dua');
});

Route::get('/about/3', function(){
	return view('about.tiga');
});

Route::get('/halaman/{nama}', function(){
	$a='john';
	return 'Nama : '.$a;
	});

Route::get('master',function(){
	return view('layouts.master2');
});

Route::get('/relasi', function(){
	$ortu = App\ortu::all();
	foreach ($ortu as $key) {
			echo $key->nama_ayah;
			echo " dengan ";
			echo $key->nama_ibu;
			echo " mempunyai anak ";
			foreach ($key->siswa as $data) {
				echo "<li>".$data->nama."</li>";
				echo "<hr>";
			}
					
	}
});

Route::get('/coba', 'MyController@index');
Route::get('/ortu', 'MyController@tampilmodel');
Route::get('/view', 'MyController@tampilview');
Route::get('/coba2', 'MyController@percobaan');


// Route::get('/testmodel', function(){
// 	$a= App\Post::all();
// 	return $a;
// });


// Route::get('/testmodel', function(){
// 	$a= App\Post::find(1);
// 	$a->title="Ciri Keluarga Sakinah";
// 	$a->save();
// 	return $a;
// });


// Route::get('/testmodel', function(){
// 	$a= App\Post::where('title','like','%Haruskah Menunda Nikah%')->get();
// 	return $a;
// });


 // Route::get('/testmodel', function(){
 // 	$a= new App\Post;
 // 	$a->title ="7 Amalan Pembuka Jodoh";
 // 	$a->content ="shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
 // 	$a->save();
 // 	return $a;
 // });


 // Route::get('/testmodel', function(){
	// $a= App\Post::find(4);
 // 	$a->delete();
 // });


 // Route::get('/testmodel', function(){
 // 	$a= App\Post::all();
 // 	return $a;
 //