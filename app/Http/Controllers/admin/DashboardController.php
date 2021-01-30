<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index()
    {
        return view('admin.admindashboard');
        switch(Auth::user()->role->name){
                case 'Admin':
                return view('layouts.admin.sidebar.adminsidebar');
                    break;
                case 'Customer':
                return view('customer.crafttary');
                    break;

             }
    }

}
