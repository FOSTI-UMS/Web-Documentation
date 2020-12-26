<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $materi = Materi::all();
        return view('admin.index', compact('materi'));
    }
}
