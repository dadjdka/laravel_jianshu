<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }

    //文章详情页
    public function show(){
        return view('post.index');
    }
    //创建文章
    public function create(){
        return 'hello word';
    }

    //创建文章(逻辑)
    public function store(){
        return 'hello word';
    }

    //编辑文章
    public function edit(){
        return 'hello word';
    }

    //编辑文章(逻辑)
    public function update(){
        return 'hello word';
    }

    //删除文章
    public function delete(){
        return 'hello word';
    }
}
