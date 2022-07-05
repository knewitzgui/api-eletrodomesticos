<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function index(){
        $brands = Brand::get()->toJson();
        return response($brands, 200);
    }

    public function create(Request $request){
        $brand = new Brand;
        $brand->name = $request->name;

        $brand->save();

        return response()->json([
            'message' => 'Produto cadastrado com sucesso!'
        ], 200);
    }

    public function update(Request $request, $id){
        if (Brand::where('id', $id)->exists()) {
            $brand = Brand::find($id);
            $brand->name = is_null($request->name) ? $brand->name : $request->name;
            $brand->save();
    
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
        if(Brand::where('id', $id)->exists()) {
            $brand = Brand::find($id);
            $brand->delete();
    
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
