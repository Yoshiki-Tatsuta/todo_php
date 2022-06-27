<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderController extends Controller
{
    //
    public function showCreateFrom()
    {
        return view('folders/create');
    }
}
