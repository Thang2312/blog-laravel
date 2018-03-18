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
// ->get lay du lieu table
Route::get('qd/get',function(){
  $data = DB::table('users')->get();
  foreach ($data as $row) {
    foreach ($row as $key => $value) {
     echo $key ." : ". $value . "<br>";
    }
  }
});

// select * form users where id = 2
Route::get('qd/where',function(){
  $data = DB::table('users')->where('id',3)->get();
  foreach ($data as $row) {
    foreach ($row as $key => $value) {
     echo $key ." : ". $value . "<br>";
    }
  }
});

//  select id, name,....
Route::get('qd/select',function(){
  $data = DB::table('users')->select(['id','name','email'])->where('id',3)->get();
  foreach ($data as $row) {
    foreach ($row as $key => $value) {
     echo $key ." : ". $value . "<br>";
    }
  }
});

// đổi tên các trường
Route::get('qd/raw',function(){
  $data = DB::table('users')->select(DB::raw('id,name as hoten,email as gmail'))->where('id',3)->get();
  foreach ($data as $row) {
    foreach ($row as $key => $value) {
     echo $key ." : ". $value . "<br>";
    }
  }
});

// OrderBy - SKIPP + TAke
// disc sap xep tu duoi len
// asc sap xep thu tu tu tren xuong
//skip : lay tu phần tử thứ mấy
// take : lấy mấy phần tử
Route::get('qd/oderby',function(){
  $data = DB::table('users')->where('id','>',1)->OrderBy('id','disc')->skip(5)->take(5)->get();
  foreach ($data as $row) {
    foreach ($row as $key => $value) {
     echo $key ." : ". $value . "<br>";
    }
  }
});

// UPdate database
Route::get('qd/update',function(){
  DB::table('users')->where('id',1)->update(['name'=>'Thang2312','email'=>'anhthangck@gmail.cmo1']);
  echo "Da update";
});

Route::get('qd/addselect',function(){
  DB::table('users')->truncate();
});
