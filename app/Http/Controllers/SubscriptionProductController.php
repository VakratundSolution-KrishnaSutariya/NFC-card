<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionProduct;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class SubscriptionProductController extends Controller
{
    public function index()
    {
        try {
            // Retrieve all subscription products
            $subscriptionProducts = SubscriptionProduct::all();
    
            // Log the number of products retrieved
            Log::info('Retrieved ' . $subscriptionProducts->count() . ' subscription products.');
    
            // Pass $subscriptionProducts to both views using array syntax and the with method
            return view('front.home.home', ['subscriptionProducts' => $subscriptionProducts])
                        ->with('subscriptionProducts', $subscriptionProducts);

          
    
        } catch (\Exception $e) {
            // Log any exceptions
            Log::error('Error retrieving subscription products: ' . $e->getMessage());
            // Handle the error as needed (e.g., show an error page)
            return abort(500, 'Internal Server Error');
        }
    }
    
    


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
{
    // Validate incoming request data
    $validator = Validator::make($request->all(), [
        'product_title' => 'required|string|max:255',
        'product_description' => 'nullable|string',
        'product_price' => 'required|numeric',
        'product_price_fix_discount' => 'nullable|numeric',
        'product_price_percentage_discount' => 'nullable|numeric',
        'product_tag' => 'nullable|string',
        'product_thumb_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size and allowed extensions as needed
        'product_gallery.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size and allowed extensions as needed
        'product_quantity' => 'nullable|integer',
        'product_color.*' => 'nullable|string', // Allow multiple colors
        'product_sku' => 'nullable|string',
        'product_category' => 'nullable|string',
        // Add validation rules for other fields as needed
    ]);

    // Check if the validation fails
    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    try {
        // Handle product thumbnail image upload
        $thumbImage = $request->file('product_thumb_image');
        $thumbImageName = 'thumb_' . now()->format('YmdHis') . '.' . $thumbImage->getClientOriginalExtension();
        $thumbImagePath = 'uploads/' . $thumbImageName; // Specify the destination path

        // Move the uploaded file to the desired location
        $thumbImage->move(public_path('uploads'), $thumbImageName);

        // Handle product gallery images upload
        $galleryImagesPaths = [];
        if ($request->hasFile('product_gallery')) {
            foreach ($request->file('product_gallery') as $galleryImage) {
                $galleryImageName = 'gallery_' . now()->format('YmdHis') . '_' . rand(1000, 9999) . '.' . $galleryImage->getClientOriginalExtension();
                $galleryImagePath = 'uploads/' . $galleryImageName; // Specify the destination path
                $galleryImage->move(public_path('uploads'), $galleryImageName);
                $galleryImagesPaths[] = $galleryImagePath;
            }
        }

        // Create a new subscription product
        $product = SubscriptionProduct::create([
            'product_title' => $request->input('product_title'),
            'product_description' => $request->input('product_description'),
            'product_price' => $request->input('product_price'),
            'product_price_fix_discount' => $request->input('product_price_fix_discount'),
            'product_price_percentage_discount' => $request->input('product_price_percentage_discount'),
            'product_tag' => $request->input('product_tag'),
            'product_thumb_image' => $thumbImagePath,
            'product_gallery' => implode(',', $galleryImagesPaths), // Store gallery images as comma-separated string
            'product_quantity' => $request->input('product_quantity'),
            'product_color' => $request->input('product_color'), // Store colors as an array
            'product_sku' => $request->input('product_sku'),
            'product_category' => $request->input('product_category'),
            // Add other fields as needed
        ]);

        // Redirect back with a success message
        return redirect()->route('sadmin.nfcCardTypes.index')->with('success', 'Subscription product created successfully!');
    } catch (\Exception $e) {
        // Log any exceptions
        Log::error('Error creating subscription product: ' . $e->getMessage());
        // Handle the error as needed (e.g., show an error page)
        return abort(500, 'Internal Server Error');
    }
}




    


    public function show($id)
    {
        $product = SubscriptionProduct::findOrFail($id);

        return view('products.show', ['product' => $product]);
    }

    // public function edit($id)
    // {
    //     // Find a subscription product by ID
    //     $product = SubscriptionProduct::findOrFail($id);

    //     return view('products.edit', ['product' => $product]);
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validate incoming request data
    //     $request->validate([
    //         'product_title' => 'required|string|max:255',
    //         'product_description' => 'nullable|string',
    //         'product_price' => 'required|numeric',
    //         'product_price_fix_discount' => 'nullable|numeric',
    //         'product_price_percentage_discount' => 'nullable|numeric',
    //         'product_tag' => 'nullable|string',
    //         'product_thumb_image' => 'required|string', // Assuming this is a URL or file path
    //         'product_gallery' => 'nullable|string', // Assuming this is a URL or file path
    //         'product_quantity' => 'nullable|integer',
    //         'product_color' => 'nullable|string',
    //         'product_sku' => 'nullable|string',
    //         'product_category' => 'nullable|string',
    //         // Add validation rules for other fields as needed
    //     ]);

    //     try {
    //         // Find the subscription product by ID and update it
    //         $product = SubscriptionProduct::findOrFail($id);
    //         $product->update($request->all());

    //         // Redirect back with a success message
    //         return redirect()->route('products.index')
    //                          ->with('success', 'Subscription product updated successfully!');
    //     } catch (\Exception $e) {
    //         // Log any exceptions
    //         Log::error('Error updating subscription product: ' . $e->getMessage());
    //         // Handle the error as needed (e.g., show an error page)
    //         return abort(500, 'Internal Server Error');
    //     }
    // }

    // public function destroy($id)
    // {
    //     try {
    //         // Find the subscription product by ID and delete it
    //         $product = SubscriptionProduct::findOrFail($id);
    //         $product->delete();

    //         // Redirect back with a success message
    //         return redirect()->route('products.index')
    //                          ->with('success', 'Subscription product deleted successfully!');
    //     } catch (\Exception $e) {
    //         // Log any exceptions
    //         Log::error('Error deleting subscription product: ' . $e->getMessage());
    //         // Handle the error as needed (e.g., show an error page)
    //         return abort(500, 'Internal Server Error');
    //     }
    // }

    public function edit($id)
{
    $product = SubscriptionProduct::findOrFail($id);
    return view('sadmin.nfcCardTypes.edit', ['product' => $product]);
}

public function update(Request $request, $id)
{
    $product = SubscriptionProduct::findOrFail($id);
    $product->update($request->all());
    return redirect()->route('sadmin.nfcCardTypes.index')->with('success', 'Product updated successfully!');
}




public function destroy($id)
{
    // $product = SubscriptionProduct::findOrFail($id);
    // $product->delete();
    // return redirect()->route('sadmin.nfcCardTypes.index')->with('success', 'Product deleted successfully!');


    $product = SubscriptionProduct::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Delete the product
        $product->delete();

        return redirect()->route('sadmin.nfcCardTypes.index')->with('success', 'Product deleted successfully.');
}

}


