<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function add(): array
    {
        return ['error' => 'Review not added'];
    }
}
