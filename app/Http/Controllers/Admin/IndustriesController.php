<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    public function index(){
       
        return view('admin.industries.index');
    }

}
