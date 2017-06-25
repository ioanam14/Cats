<?php

namespace App\Http\Controllers;

use App\AdoptionCatsModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdoptionController extends Controller
{
    public function index()
    {
        // Select
        $cats = AdoptionCatsModel::all()->toArray();
//        $cats = AdoptionCatsModel::where('id', '>', 1)->get()->toArray();
//        $cats = AdoptionCatsModel::where('id', 1)->get()->toArray();

        // Save
//        $data = ['name' => 'Ioana', 'race' => 'om', 'description' => 'Descriere', 'photo' => 'NU AVEM'];
//        $cat = new AdoptionCatsModel();
//        $cat->fill($data);
//        $cat->save();

        // Delete
//        AdoptionCatsModel::where('name', 'Ioana')->delete();


//        print '<pre>';
//        print_r($cats[0]);
//        print '</pre>';

//        die('HAPPY');

        return view('adoption/show', compact('cats'));
    }

    public function addCat()
    {
        return view('adoption/add');
    }

    public function postCat(Request $request)
    {

        $data['name'] = $request->input('name');
        $data['race'] = $request->input('race');
        $data['description'] = $request->input('description');
        $data['photo'] = $request->input('photo');

        $cat = new AdoptionCatsModel();
        $cat->fill($data);
        $cat->save();

        return view('adoption/succes');
    }
}
