<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function cerveja(){
        $products = Product::all();
        return view('cerveja', ['products' => $products]);  
    }

    public function coquetel(){
        $products = Product::all();
        return view('coquetel', ['products' => $products]);
    }

    public function diverso(){
        $products = Product::all();
        return view('diverso', ['products' => $products]);
    }

    public function drinks(){
        $products = Product::all();
        return view('drinks', ['products' => $products]);
    }

    public function energetico(){
        $products = Product::all();
        return view('energetico', ['products' => $products]);
    }

    public function petisco(){
        $products = Product::all();
        return view('petisco', ['products' => $products]);
    }

    public function refrigerante(){
        $products = Product::all();
        return view('refrigerante', ['products' => $products]);
    }

    public function sobremesa(){
        $products = Product::all();
        return view('sobremesa', ['products' => $products]);
    }

    public function suco(){
        $products = Product::all();
        return view('suco', ['products' => $products]);
    }

    public function sushi(){
        $products = Product::all();
        return view('sushi', ['products' => $products]);
    }

    public function vinho(){
        $products = Product::all();
        return view('vinho', ['products' => $products]);
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
        return view('edit')->with('msg', 'Produto editado com sucesso!');
    }

    public function destroy($id){
        Product::findOrFail($id)->delete();
        return redirect('/admin')->with('msg', 'Produto excluido com sucesso!');
    }
}
