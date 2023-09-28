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

    public function addProduct(){
        return view('addProduct');
    }

    public function store(Request $request){


        

        /* $product = new Product;

        $product = new Product;

        $product->img = $request->img;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;
        
        $product->save();   */

        /* if($request->hasFile('img')){
           
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            $extension = $request->file('img')->getClientOriginalExtension();
            
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            
            $path = $request->file('img')->storeAs('public/img', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }
       
        $product = Product::create([
            'description' => mb_strtolower($request->description),
            'price' => mb_strtolower($request->price),
            'category' => mb_strtolower($request->category),
            'img' => $fileNameToStore
        ]);
 */
        return redirect('/dashboard')->with('msg', 'Produto adicionado com sucesso!');
    }   
    
    public function edit($id){
        $products = Product::findOrFail($id);
        return view('edit', ['products' => $products]);
    } 

    public function update(Request $request){
        Product::findOrFail($request->id)->update($request->all()); 
        return redirect('dashboard')->with('msg', 'Produto editado com sucesso!') ;
    }
    
    public function admin(){
        $products = Product::all();
        return view('admin', ['products' => $products]);
    }

    public function showProduto($id){
        $products = Product::findOrFail($id);
        return view('showProduto', ['products' => $products]);
    }

    public function destroy($id){
        Product::findOrFail($id)->delete();
        return redirect('/admin')->with('msg', 'Produto excluido com sucesso!');
    }

    public function carregado(){
        return view('carregando');
    }
}
