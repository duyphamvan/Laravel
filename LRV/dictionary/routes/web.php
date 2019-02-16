<?php
Route::get('index', function (){
   return view('display');
});
Route::post('ketqua', 'DictionaryController@index')->name('hienthi');
