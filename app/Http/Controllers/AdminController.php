<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function showProduto($id){
        $products = Product::findOrFail($id);
        return view('showProduto', ['products' => $products]);
    }

    public function edit($id){
        $products = Product::findOrFail($id);
        return view('edit', ['products' => $products]);
    } 

    public function update(Request $request){
        Product::findOrFail($request->id)->update($request->all()); 
        return redirect('admin')->with('msg', 'Produto editado com sucesso!');
    }

    public function destroy($id){
        Product::findOrFail($id)->delete();
        return redirect('/admin')->with('msg', 'Produto excluido com sucesso!');
    }

    public function loginForm(){
        return view('loginForm');
    }

    public function auth(Request $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('voce esta logado');
        }else{
            dd('voce nao esta logado');
        }

    }
}