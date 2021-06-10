<?php

namespace App\Http\Controllers;
use App\Models\Brands;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\ProductsCreateRequest;
use App\Http\Requests\ProductsUpdateRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Products::latest()->paginate(10);
        return view('dashboard')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brands::all();
        return view('createProducts',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductsCreateRequest  $request
     * @return Response
     */
    public function store(ProductsCreateRequest $request)
    {
        
        $validate=$request->validated();
        $products= Products::create($validate);
        // return response()->json($products, Response::HTTP_CREATED);
         return redirect()->route('dashboard')->with('success','Products Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product = Products::find($id)->toArray();
        $brand = Brands::find($product['brand_id'])->toArray();
        array_push($product, $brand['brandname']);
        return view('showProducts',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Products  $products
     * @return Response
     */
    public function edit($id)
    {
        $product = Products::find($id)->toArray();
        $brand = Brands::find($product['brand_id'])->toArray();
        array_push($product, $brand['brandname']);
        $brands = Brands::all();
        return view('EditProducts',compact('product','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductsUpdateRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsUpdateRequest $request, $id)
    {
        $validate=$request->validated();

        $products = Products::find($id);
        $products->name=$validate['name'];
        $products->modelno=$validate['modelno'];
        $products->brand_id=$validate['brand_id'];
        $products->save();
        $product = Products::latest()->with('brands')->paginate(10);
         return redirect()->route('dashboard',compact('product'))->with('i', (request()->input('page', 1) -1) *10);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id)->delete();
        return back()->with('success','Products Deleted Successfull !');
    }
}
