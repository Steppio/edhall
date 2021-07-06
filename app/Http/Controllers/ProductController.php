<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    /**
     * Show all of our Products
     *
     * @view
     */
	public function index()
	{
		$products = Product::query()->paginate(10);
		return view('product.index')->with(compact('products'));
	}

    /**
     * Add Product View
     *
     * @view
     */
	public function add()
	{
		return view('product.add');
	}

    /**
     * Add Product Method
     *
     * @view
     */
    public function create(Request $request)
    {
    	// create our validation object to test the request data against
        $this->validate($request, [
            'title' => 'required|max:255',
            'firstname' => 'required|max:255',
            'mainname' => 'required|max:255'
        ]);
        // create new product object and add request data into it
    	$product = new Product();
    	$product->title = $request->title;
    	$product->firstname = $request->firstname;
    	$product->mainname = $request->mainname;
    	$product->price = $request->price;
    	$product->numpages = $request->numpages;
    	$product->playlist = $request->playlist;
    	// $product->user_id = auth()->user()->id;
    	// save our object through the model and return to dashboard
    	$product->save();
    	return redirect('/dashboard'); 
    }

    /**
     * Edit Product View
     *
     * @view
     */
    public function edit(Product $product)
    {
         
        return view('product.edit', compact('product'));
          	
    }

    /**
     * Edit Update Method
     *
     * @view
     */
    public function update(Request $request, Product $product)
    {
    	if(isset($_POST['delete'])) {
    		$product->delete();
    		return redirect('/dashboard');
    	}
    	else
    	{
            $this->validate($request, [
	            'title' => 'required|max:255',
	            'firstname' => 'required|max:255',
	            'mainname' => 'required|max:255'
            ]);
			$product->title = $request->title;
			$product->firstname = $request->firstname;
			$product->mainname = $request->mainname;
			$product->price = $request->price;
			$product->numpages = $request->numpages;
			$product->playlist = $request->playlist;
	    	$product->save();
	    	return redirect('/dashboard'); 
    	}    	
    }

    /**
     * Search Products
     *
     * @view
     */
    public function search(Request $request) {

    	// get our search term from our input
    	$search = $request->input('search');

    	// Query our Product model to find any title / firstname / mainname that matches search term
    	$products = Product::query()->where('title', 'LIKE', "%{$search}%")->orWhere('firstname', 'LIKE', "%{$search}%")->orWhere('mainname', 'LIKE', "%{$search}%")->get();

    	// Return results with our view
    	return view('search', compact('products'));

    }

}
