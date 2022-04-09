<?php

namespace App\Http\Controllers;

use App\Models\Shortener;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShortenerController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function short_url(Request $request)
    {
        Shortener::create($request->all());
        $message = DB::getPdo()->lastInsertId();
        return redirect()->route('home')->with('message', $message);
    }

    public function slug($id)
    {
        $shorted_url = Shortener::find($id);
        return redirect($shorted_url->long_url);
    }
}
