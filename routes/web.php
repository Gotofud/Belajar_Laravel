<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Siswascontroller;
use App\Http\Controllers\PppdbsController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\isAdmin; 
use PHPUnit\TextUI\XmlConfiguration\Group;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Front
Route::get('/', [FrontController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return 'Halo Ini About';
});

Route::get('/contact', function () {
    return 'Halo Ini Contact';
});

Route::get('/siswa', function () {
    $data_siswa = ['Fazli', 'Sulis', 'Kiki', 'Rido', 'Agoes Hangky'];
    return view('tampil', compact('data_siswa'));
});

Route::get('/tes/{nama}/{tempat_lahir}/{jk}/{agama}/{alamat}', function ($nama, $tmp_lahir, $jk, $agama, $alamat) {
    return "Nama : " . $nama . "<br>" .
        "Tempat Lahir : " . $tmp_lahir . "<br>" .
        "Jenis Kelamin : " . $jk . "<br>" .
        "Agama : " . $agama . "<br>" .
        "Alamat : " . $alamat;
});

Route::get('/hitung/{angka1}/{angka2}', function ($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    return "Angka 1 : " . $angka1 . "<br>" .
        "Angka 2 : " . $angka2 . "<br>" .
        "Hasil : " . $hasil;
});

Route::get(
    '/latihan/{nama}/{no}/{jns}/{nm_brng}/{jumlah}/{pembayaran}',
    function ($nama, $no, $jns_barang, $nm_barang, $jumlah, $pembayaran) {
        if ($jns_barang == "handphone") {
            if ($nm_barang == "poco") {
                $harga = 3000000;
            } elseif ($nm_barang == "samsung") {
                $harga = 5000000;
            } elseif ($nm_barang == "iphone") {
                $harga = 15000000;
            }
        } elseif ($jns_barang == "laptop") {
            if ($nm_barang == "lenovo") {
                $harga = 4000000;
            } elseif ($nm_barang == "acer") {
                $harga = 8000000;
            } elseif ($nm_barang == "macbook") {
                $harga = 20000000;
            }
        } elseif ($jns_barang == "tv") {
            if ($nm_barang == "toshiba") {
                $harga = 5000000;
            } elseif ($nm_barang == "samsung") {
                $harga = 8000000;
            } elseif ($nm_barang == "lg") {
                $harga = 10000000;
            }
        }

        if ($pembayaran == "cash") {
            $potongan = 0;
        } elseif ($pembayaran == "transfer") {
            $potongan = 50000;
        }

        $total_awal = $harga * $jumlah;
        if ($total_awal >= 10000000) {
            $cashback = 500000;
        } else {
            $cashback = 0;
        }

        $total_akhir = $total_awal - $cashback - $potongan;

        return "Nama : " . $nama . "<br>" .
            "Telepon : " . $no . "<hr>" .
            "Jenis Barang : " . $jns_barang . "<br>" .
            "Nama Barang : " . $nm_barang . "<br>" .
            "Harga : Rp" . number_format($harga) . "<br>" .
            "Jumlah : " . $jumlah . "<hr>" .
            "Total : Rp" . number_format($total_awal) . "<br>" .
            "Cashback Rp: " . number_format($cashback) . "<br>" .
            "Pembayaran : " . $pembayaran . "<br>" .
            "Potongan Rp: " . number_format($potongan) . "<hr>" . "<br>" .
            "Total Pembayaran Rp: " . number_format($total_akhir) . "<br>";
    }
);


Route::get('/post', [PostsController::class, 'menampilkan']);

Route::get('/barang', [PostsController::class, 'menampilkan2']);

// Route::get('/barang', function () {
//     // $barang = Barang::where('merk','LIKE', '%honda%')->get(); ini untuk kata yang mirip
//     $barang = Barang::where('id', 3)->get();
//     return view('tampil_barang',compact('barang'));
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CRUD

Route::prefix('admin')->middleware('auth',isAdmin::class)->group(function(){    
    route::resource('siswa', Siswascontroller::class);
    route::resource('kategori', KategoriController::class);
    route::resource('produk', ProdukController::class);
});

route::resource('ppdb', PppdbsController::class);
route::resource('telepon', TeleponController::class);
route::resource('pengguna', PenggunaController::class);
route::resource('product', ProductController::class);
route::resource('customer', CustomerController::class);
route::resource('order', OrderController::class);
route::resource('penerbit', PenerbitController::class);
route::resource('genre', GenreController::class);
route::resource('buku', BukuController::class);
route::resource('pembeli', PembeliController::class);
route::resource('transaksi', TransaksiController::class);
route::resource('front', FrontController::class);