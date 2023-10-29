<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function list(){
        return view('admin.pages.review.list');
    }
}
