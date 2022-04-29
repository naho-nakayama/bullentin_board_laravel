<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add()
    {
        return view('post/create');
    }
    
      public function create(Request $request)
  {
      // admin/test/createにリダイレクトする
      return redirect('admin/news/create');
  }  
}
