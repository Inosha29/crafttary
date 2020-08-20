<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = DB::select('select * from admin where active = ?', [1]);

        return view('admin.index', ['admin' => $admin]);
    }
    //
}
