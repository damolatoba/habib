<?php

namespace App\Http\Controllers;
use DB;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = DB::table('products')->where('is_deleted', 0)->orderBy('product_name', 'asc')->simplePaginate(10);
        // dd($products);
        // return view('account.products');
        return view('account.products', ['products' => $products]);
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'branch' => ['required', 'string', 'max:255'],
    //         'location' => ['required', 'string', 'max:255'],
    //         'manager-name' => ['required', 'string', 'min:8'],
    //         'manager-mobile' => ['required', 'bigInteger', 'min:8', 'unique:branches'],
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $imageName = time().'.'.$request->product_image->extension();
            $file->move(public_path('uploads/images'), $imageName);
    
            $createProduct = Product::create([
                'product_name' => $request->input('product'),
                'product_type' => $request->input('product_type'),
                'product_size' => $request->input('product_size'),
                'description' => $request->input('description'),
                'product_prize' => $request->input('product_prize'),
                'is_deleted' => 0,
                'product_image' => $imageName,
                
            ]);
    
            if($createProduct = true){
                emotify('success', 'Product added successfully.');         
                return back();
            }else{
                emotify('error', 'Error adding new product. Please try again later');
                return back();
            }
        }else{
            emotify('error', 'Product Image is missing');
            return back(); 
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $products = Product::where('is_deleted', '=', 0)
                            ->where('product_type' ,'=', 1)
                            ->orderBy('product_name', 'asc')
                            ->get();
        return $products->toJson();
    }

    public function showSpecials(Product $product)
    {
        //
        $products = Product::where('is_deleted', '=', 0)
                            ->where('product_type' ,'=', 2)
                            ->orderBy('product_name', 'asc')
                            ->get();
        return $products->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $productId = $request->input('productId');
        // dd($productId);
        if ($request->hasFile('product_image')){
            $file = $request->file('product_image');
            $imageName = time().'.'.$request->product_image->extension();
            $file->move(public_path('uploads/images'), $imageName);
    
            // $updateProduct = Product::create([
            //     'product_name' => $request->input('product'),
            //     'product_type' => $request->input('product_type'),
            //     'product_size' => $request->input('product_size'),
            //     'description' => $request->input('description'),
            //     'product_prize' => $request->input('product_prize'),
            //     'is_deleted' => 0,
            //     'product_image' => $imageName,
                
            // ]);
            $product = Product::find($productId);
            $product->product_name = $request->input('product');
            $product->product_type = $request->input('product_type');
            $product->product_size = $request->input('product_size');
            $product->description = $request->input('description');
            $product->product_prize = $request->input('product_prize');
            $product->product_image = $imageName;

            $result = $product->save();
    
        }else{
            $product = Product::find($productId);
            $product->product_name = $request->input('product');
            $product->product_type = $request->input('product_type');
            $product->product_size = $request->input('product_size');
            $product->description = $request->input('description');
            $product->product_prize = $request->input('product_prize');
            // $product->product_image = $imageName;

            $result = $product->save();
        }
        if($result = true){
            emotify('success', 'Product updated successfully.');         
            return back();
        }else{
            emotify('error', 'Error updating product. Please try again later');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function delete(Request $request, Product $product)
    {
        //
        $rowid = $request->input('delid');
        // dd($rowid);
        $product = Product::find($rowid);
        $product->is_deleted = 1;

        $product->save();

        emotify('success', 'Product Successfully Deleted.');         
        return back();

        // dd($rowid);
    }
}
