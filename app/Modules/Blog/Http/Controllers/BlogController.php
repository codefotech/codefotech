<?php

namespace App\Modules\Blog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        return view("Blog::index");
    }
}
