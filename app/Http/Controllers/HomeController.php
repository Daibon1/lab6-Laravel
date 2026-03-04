<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Nguyen Van Dai',
            'age' => 21,
            'school' => 'Đại học CNTT'
        ];

        return view('welcome', compact('data'));
    }
    public function multiplication($n)
{
    // Kiểm tra có phải số không
    if (!is_numeric($n)) {
        return view('multiplication', [
            'error' => 'Giá trị nhập vào không hợp lệ!'
        ]);
    }

    return view('multiplication', [
        'n' => (int)$n
    ]);
}
}