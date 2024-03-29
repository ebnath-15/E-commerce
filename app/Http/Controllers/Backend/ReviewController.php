<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\ReviewRatings;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function list(){
    $reviews = ReviewRatings::with(['product', 'user'])->get();
        return view('admin.pages.review.list',compact('reviews'));
    }
}
