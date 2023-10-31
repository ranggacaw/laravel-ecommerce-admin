<?php

namespace App\Http\Controllers;

use App\Models\PopularBrand;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PopularBrandController extends Controller
{
    public function index()
    {
        $brands = PopularBrand::paginate(10);

        return view('popularbrand.index', compact('brands'));
    }

    public function create()
    {
        return view('popularbrand.create');
    }

    public function createStore(Request $request)
    {
        $brand = new PopularBrand;

        // ubah nama name biar unique
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('img/popular_brand'), $imageName);

        // data yg di request masukin ke kolom pada table
        $brand->image = $imageName;
        $brand->merk = $request->merk;
        $brand->description = $request->description;
        $brand->save();

        Alert::success('Success', 'New brand has been Realese!');
        return redirect('popular-brand');
    }
}
