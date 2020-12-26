<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;

class HomeController extends Controller
{
    public function index()
    {
        $materi = Materi::orderBy('created_at', 'desc')->paginate(10);
        return view('index', compact('materi'));
    }
    public function cate(Request $request)
    {
        if ($request->cate) {
            $cate = $request->cate;
            $materi = Materi::where('category_id', $cate)->orderBy('created_at', 'desc')->paginate(10);
            $tot = Materi::where('category_id', $cate)->count();
            return view('index', compact('materi', 'tot'));
        } else {
            return redirect(route('home'));
        }
    }
    public function search(Request $request)
    {
        if ($request->s) {
            $s = $request->s;
            $materi = Materi::where('judul', 'like', "%" . $s . "%")->paginate(10);
            $tot = Materi::where('judul', 'like', "%" . $s . "%")->count();
            return view('index', compact('materi', 'tot'));
        } else {
            return redirect(route('home'));
        }
    }
    public function author(Request $request)
    {
        if ($request->author) {
            $author = $request->author;
            $materi = Materi::where('penulis', $author)->orderBy('created_at', 'desc')->paginate(10);
            $tot = Materi::where('penulis', $author)->count();
            return view('index', compact('materi', 'tot'));
        } else {
            return redirect(route('home'));
        }
    }
    public function materi($slug)
    {
        $materi=Materi::where('slug', $slug)->get()->first();
        if ($materi != null) {
            $materi->increment('views');
            return view('post', compact('materi'));
        } else {
            return abort(404);
        }
    }
}
