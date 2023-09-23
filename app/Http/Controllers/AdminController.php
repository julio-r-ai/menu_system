<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Admin;

class AdminController extends Controller
{

    public function admin(){
        $products = Product::all();
        return view('admin', ['products' => $products]);
    }

    public function store(Request $request){

        $product = new Product;

        $product->img = $request->img;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;

        /* if($request->hashFile('img') && $request->file('img')->isValid()){
            
            $reequestImage = $reequestImage->img;

            $exrtension = $reequestImage-extension();

            $imageName = md5($reequestImage->getClientOriginalName() . strtotime("now")) . "." . $exrtension;

            $request->img->move(public_path('img/product'), $imageName);

            $product->img = $imageName;

        }*/

        $product->save(); 

        return redirect('/admin')->with('msg', 'Produto cadastrado com sucesso!');
    }
}