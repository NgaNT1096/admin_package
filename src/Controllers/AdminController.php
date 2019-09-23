<?php

namespace Ngant\Admin_package\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        return view('vendor/admin/contact/index');
    }
}
