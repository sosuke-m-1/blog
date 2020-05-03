<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $data['articles'] = Article::all();
        return view('list', $data);
    }
}
