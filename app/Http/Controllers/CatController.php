<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class CatController extends BaseController
{
    public function getAdd ()
    {
        return view('add_cat');
    }

    public function addCat(Request $request)
    {
        $cat['name'] = $request->input('catname');
        $cat['race'] = $request->input('catrace');
        $cat['photo'] = $request->input('photourl');

        return view('show_cat', compact('cat'));
    }
}
