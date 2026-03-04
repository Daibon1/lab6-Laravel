<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});
Route::get('/about', function () {
    return "Họ tên: Nguyễn Văn Đại | Lớp: CNPM3 | MSSV: 23810310422";
});

Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return "Tổng của $a và $b là: $tong";
});
Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Tên sinh viên: $name | Tuổi: $age";
});
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });

    Route::get('/users', function () {
        return "Danh sách người dùng";
    });

});
Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Ngày hợp lệ: $day/$month/$year";
})->where([
    'day' => '([1-9]|[12][0-9]|3[01])',
    'month' => '([1-9]|1[0-2])',
    'year' => '[0-9]{4}'
]);

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'list']);


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});





Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);