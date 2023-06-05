<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display login page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.authentications.login');
    }

    /**
     * Authenticate user.
     *
     * @return \Illuminate\View\View
     */
    public function authenticate(Request $request)
    {

    }
}