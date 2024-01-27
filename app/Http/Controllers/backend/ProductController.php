<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::All();

        return view('backend.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['products'] = Category::All();
        return view('backend.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validate = $request->validate([
                'name' => 'required | min:4',
                'description' => 'required | min:6',
                'price' => 'required | numeric',
                'category' => 'required',
                'photo' => 'mimes:jpg,jpeg,png',
        ]);

        $filename = "images/".time().".".$request->photo->extension();
        
        //  echo  $request->photo->extention();
        //  echo "<br>";
        //  echo public_path('images');
        //  echo "<br>";
        //  echo  $request->file('photo');
        //  echo "<br>";
        //  echo  $request->photo->path();
        //  echo "<br>";
        //  echo  $request->photo->store('images');

         
        //  dd($request->photo);


        if($validate){
             $data = [
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'availibility' => $request->availibility,
             'tags' => $request->tags,
            'image' => $filename,
        ];
        $model = new Product();
        if($model->create($data)){
            $request->photo->move(public_path('images'),$filename);
             return redirect('product')->with('msg','Successfully Product Added');
        }

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data = Product::find($id);
        $cats = Category::all();
        return view('backend.product.edit', compact('data','cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required | min:4',
            'description' => 'required | min:6',
            'price' => 'required | numeric',
            'category' => 'required',
            'photo' => 'mimes:jpg,jpeg,png',
        ]);

        $filename = time().".".$request->photo->extension();
        
        //  echo  $request->photo->extention();
        //  echo "<br>";
        //  echo public_path('images');
        //  echo "<br>";
        //  echo  $request->file('photo');
        //  echo "<br>";
        //  echo  $request->photo->path();
        //  echo "<br>";
        //  echo  $request->photo->store('images');

        
        //  dd($request->photo);


        if($validate){
            $data = [
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'availibility' => $request->availibility,
            'tags' => $request->tags,
        ];
        $model = new Product();
        if($model->update($data)){
            // $request->photo->move(public_path('images'),$filename);
            return redirect('product')->with('msg','Successfully Product Added');
        }

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $product = Product::find($id);
        $product->delete();
            return redirect('product')->with('msg','Deleted successful');
   
    }
}
