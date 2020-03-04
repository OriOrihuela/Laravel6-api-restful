<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Esta función nos devolvera todos los productos que tenemos en nuestra BD
    public function index()
    {
        $product = Product::all();
        return $product;
    }

    //Esta función guardará los productos que enviaremos.
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
    }

    //Esta función devolverá los datos de una producto que hayamos seleccionado para cargar el formulario con sus datos
    public function show(Request $request)
    {
        $product = Product::findOrFail($request->id);
        return $product;
    }

    //Esta función actualizará el producto que hayamos seleccionado
    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

        return $product;
    }

    //Esta función obtendra el id de el producto que hayamos seleccionado y lo borrará de nuestra BD
    public function destroy(Request $request)
    {
        $product = Product::destroy($request->id);
        return $product;
    }
}
