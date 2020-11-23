<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Demo
{
    public function index(Request $request){
//        return response('Hello World')->cookie(
//            'name', 'value', 1
//        );
//        return redirect()->action([UserController::class, 'index']);
        // 获取当前 URL 没有 query string...
        echo url()->current();

// 获取当前 URL 包括 query string...
        echo url()->full();

// 获取上个请求 URL
        echo url()->previous();
    }

}
