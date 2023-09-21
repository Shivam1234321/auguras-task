<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product = new Product;
        if(!empty($request->name)|| !empty($request->description)){
            $product = $product->where('name','like', "%".$request->name."%")->orWhere('description','like', "%".$request->description."%");
        }
        $data['products'] = $product->get();
        return view('products', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['created_at'] = date("Y-m-d h:i:s");
        $res = Product::updateOrCreate(['name' => $request['name']], $request->except('_token'));
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::find($id);
        if($data){
            echo "Name :- " .$data->name."\n";
            echo "<br/>";
            echo "Description:- ".$data->description."\n";

            echo "<br/>";
            echo "Price:- ".$data->price."\n";

            echo "<br/>";
            echo "Created Date:- ".date("d M, Y", strtotime($data->created_at))."\n";
        }else{
            echo "Data not found";
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['product'] = Product::find($id);
        if($data['product']){
            return view('edit', $data);
        }else{
            return redirect("product");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $res = Product::where('id', $id)->update($request->except('_token'));
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
