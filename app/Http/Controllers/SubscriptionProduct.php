<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionProduct;
use BeyondCode\QueryDetector\Outputs\Console;
use Illuminate\Support\Facades\Log;


Log::channel('custom')->info('Custom log message here');



class SubscriptionProductController extends Controller
{
    public function index()
    {
        try {
            // Retrieve all subscription products
            $products = SubscriptionProduct::all();

            // Log the number of products retrieved
           Log::info('Retrieved ' . $products->count() . ' subscription products.');

            dd($products);

            return view('products.index', ['products' => $products]);
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
        $request->validate([
            'product_title' => 'required',
            'product_price' => 'required|numeric',
            'product_thumb_image'=> 'required'
            // Add validation rules for other fields
        ]);

        // Create a new subscription product
        SubscriptionProduct::create($request->all());

        // Redirect back with a success message
        return redirect()->route('products.index')
                         ->with('success', 'Subscription product created successfully!');
    }

     public function show($id)
    {
        $product = SubscriptionProduct::findOrFail($id);

        // Calculate the discounted price based on fixed discount
        $discountedPrice = $product->product_price - $product->product_price_fix_discount;

        // Calculate the discounted price based on percentage discount
        $percentageDiscount = $product->product_price * ($product->product_price_percentage_discount / 100);
        $discountedPriceWithPercentage = $product->product_price - $percentageDiscount;

        return view('products.show', [
            'product' => $product,
            'discountedPrice' => $discountedPrice,
            'discountedPriceWithPercentage' => $discountedPriceWithPercentage
        ]);
    }
    

    public function edit($id)
    {
        // Find a subscription product by ID
        $product = SubscriptionProduct::findOrFail($id);

        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $request->validate([
            'product_title' => 'required',
            'product_price' => 'required|numeric',
            // Add validation rules for other fields
        ]);

        // Find the subscription product by ID and update it
        $product = SubscriptionProduct::findOrFail($id);
        $product->update($request->all());

        // Redirect back with a success message
        return redirect()->route('products.index')
                         ->with('success', 'Subscription product updated successfully!');
    }

    public function destroy($id)
    {
        // Find the subscription product by ID and delete it
        $product = SubscriptionProduct::findOrFail($id);
        $product->delete();

        // Redirect back with a success message
        return redirect()->route('products.index')
                         ->with('success', 'Subscription product deleted successfully!');
    }
}
