<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/result-translate', function (\Illuminate\Http\Request $request) {
    $keyword = $request->keyword;
    $arr = array(
        "Go" => "Đi",
        "Run" => "Chạy",
        "Fly" => "Bay",
        "Jump" => "Nhảy"
    );
    foreach ($arr as $key => $value) {
        if ($keyword === $key) {
            return view('result-translate', compact(['keyword','value']));
        }
    }
});
