<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ListController extends Controller
{
    public function index() {
        $data['articles'] = Article::all();
        return view('list', $data);
    }

    public function detail($id) {
        $data['article'] = Article::find($id);
        return view('detail', $data);
    }
}
