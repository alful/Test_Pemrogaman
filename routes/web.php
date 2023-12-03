<?php

use App\Models\Produk;
use App\Models\Status;
use App\Models\Kategori;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    $password = md5('bisacoding-03-12-23');
    dd($password);

    $url = 'https://recruitment.fastprint.co.id/tes/api_tes_programmer';
    // $client = new GuzzleHttp\Client();
    // $response = $client->request('POST', $url, [
    //     'auth' => ['tesprogrammer031223C02', $password]
    // ]);


    $response = Http::post('http://recruitment.fastprint.co.id/tes/api_tes_programmer');
    $response = Http::withDigestAuth('tesprogrammer031223C09', $password)
        ->accept('application/json')
        ->post(
            $url,
            [
                'Key A' => 'Value A',
                'Key B' => 'Value B'
            ]
        );

    if ($response->ok()) {
        $users = $response->json();
        dd($users);
    } else {
        dd($response);
    }
    // dd($response->getStatusCode());
});
Route::get('/home', function () {
    return view('home', [
        'produk' => Produk::where('status_id', 2)->get(),
        'kategori' => Kategori::get(),
        'status' => Status::get(),
    ]);
});

Route::resource('/produk', ProdukController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/status', StatusController::class);
