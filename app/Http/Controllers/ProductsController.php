<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        if(request()->filled('brand_id')){
            $brand_id = request()->brand_id;
            $products = Product::where('brand_id', $brand_id)->get();
            return response($products, 200);
        } else {
            $products = Product::with('brand')->get()->toJson();
            return response($products, 200);
        }
    }

    public function create(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->voltage = $request->voltage;
        $product->brand_id = $request->brand_id;

        $product->save();

        return response()->json([
            'message' => 'Produto cadastrado com sucesso!'
        ], 200);
    }

    public function update(Request $request, $id){
        if (Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->name = is_null($request->name) ? $product->name : $request->name;
            $product->description = is_null($request->description) ? $product->description : $request->description;
            $product->voltage = is_null($request->voltage) ? $product->voltage : $request->voltage;
            $product->brand_id = is_null($request->brand_id) ? $product->brand_id : $request->brand_id;
            $product->save();
    
            return response()->json([
                "message" => "Produto atualizado com sucesso!"
            ], 200);
        } else {
            return response()->json([
                "message" => "Falha ao atualizar o produto."
            ], 404);  
        }
    }

    public function delete($id){
        if(Product::where('id', $id)->exists()) {
            $product = Product::find($id);
            $product->delete();
    
            return response()->json([
              "message" => "Produto excluido com sucesso!"
            ], 202);
        } else {
            return response()->json([
              "message" => "Falha ao excluir produto"
            ], 404);
        }
    }
}
