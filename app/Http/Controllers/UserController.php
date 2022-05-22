<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index', [
            "title" => "Categories",
            "categories" => Category::all(),
        ]);
    }
}
