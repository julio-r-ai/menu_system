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

    public function admin(){
        $search = request('search');  

        if($search){
            $products = Product::where([
                ['description', 'like', '%'.$search.'%'] 
            ])->get();
        }else{
            $products = Product::all();
        }  
    
        return view('admin', ['products' => $products, 'search' => $search]);
    }

    public function addProduct(){   
        return view('addProduct');
    }

    public function store(Request $request){ 
        $product = new Product;

        $product->description = $request->description;
        $product->price = $request->price;
        $product->category = $request->category;

        if($request->hasFile('img') && $request->file('img')->isValid()){
            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($request->img->getClientOriginalName().strtotime('now')).'.'.$extension;

            $request->img->move(public_path('img/products'), $imageName);

            $product->img = $imageName;
        }

        $product->save();  

        return redirect('/admin')->with('msg', 'Produto adicionado com sucesso!');
    }   
    
    public function edit($id){
        $products = Product::findOrFail($id);
        return view('edit', ['products' => $products]);
    } 

    public function update(Request $request){

        $data = $request->all();

        if($request->hasFile('img') && $request->file('img')->isValid()){
            $requestImage = $request->img;

            $extension = $requestImage->extension();

            $imageName = md5($request->img->getClientOriginalName().strtotime('now')).'.'.$extension;

            $request->img->move(public_path('img/products'), $imageName);

            $data['img'] = $imageName;
        }
        
        Product::findOrFail($request->id)->update($data);
        

        return redirect('admin')->with('msg', 'Produto editado com sucesso!') ;
       
    }

    public function showProduto($id){
        $products = Product::findOrFail($id);
        return view('showProduto', ['products' => $products]);
    }

    public function destroy($id){
        Product::findOrFail($id)->delete();
        return redirect('/admin')->with('msg', 'Produto excluido com sucesso!');
    }

    public function loading(){
        return view('loading');
    }
}
