<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\frontEnd\Contact;
use App\Models\superAdmin\Page;
use App\Models\frontEnd\Orderform;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleRequest;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
        
        $cart = session()->get('cart', []);
        // dd($cart);

        $subtotal = 0;
        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        $shipping = 0; // or calculate dynamically
        $total = $subtotal + $shipping;

                return view('frontEnd.checkout.index',compact('cart','subtotal','total','shipping'));

       
    }
    
    public function store(Request $request)
    {
       // Validate the inputs as needed

    $productIds = $request->input('product_ids', []);
    $quantities = $request->input('quantities', []);

    // Prepare an array to store product IDs and their quantities
    $products = [];

    foreach ($productIds as $index => $productId) {
        $quantity = isset($quantities[$index]) ? $quantities[$index] : 1; // Default to 1 if not found

        $products[] = [
            'product_id' => $productId,
            'quantity' => $quantity,
        ];
    }

        $orderform= Orderform::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'amount' => $request->input('amount'),
            'category' => $request->input('category'),
            'product_ids' => json_encode($products), // Store JSON with product_id and quantity

          
        ]);

        return back()->with('success', 'Thank you! Order has been submitted successfully.');
    }



    public function createMyPayOrder(Request $request)
    {
        $client = new Client();
        $headers = [
            'API_KEY' => 'ops+CFvhqi68+UcCxkMRgxM/KzXqXfW9juocAIQGJb9Gk53yRqB5bng8GmhMWD0z',
            'Content-Type' => 'application/json'
        ];
        $request->validate([
           'name' => [
            'required',
            'regex:/^[A-Za-z ]+$/',
            function ($attribute, $value, $fail) {
                if (!str_contains($value, ' ')) {
                    $fail('The name must include both first and last names.');
                }
            },
            'max:65',
            ],
            'email' => 'required|email', // Add email validation rule           
            'amount' => 'required|min:0|max:5000',
            'image' => 'nullable|mimes:pdf,jpeg,png,jpg,gif|max:2048', // Allow for a nullable image

        ]);

        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            // Store the image and get its path
            $imagePath = $request->file('image')->store('public/images');
            $imageUrl = basename($imagePath);
        } else {
            // Set a default value if no image is uploaded
            $imageUrl = null;
        }

        // Add 'path' to the request data
        $request->merge(['path' => $imageUrl]);

        // Create a new Contact record with the merged data
         $pricing= Orderform::create($request->all());



        // Generate the product code and set it
        $productcode = '#MPRM00' . $pricing->id;
        $pricing->order_id = $productcode;
        $body = json_encode([
            'Amount' => $request->input('amount'),
            'OrderId' => $productcode,

            'UserName' => 'MyPayEventsReg',
            'Password' => 'Test@123',
            'MerchantId' => 'MER55185619'
        ]);
        if ($request->input('amount') != 0) {
        // $request = new GuzzleRequest('POST', 'https://smartdigitalnepal.com/api/use-mypay-payments', $headers, $body);
        // $response = $client->send($request);


        $guzzleRequest = new GuzzleRequest('POST', 'https://smartdigitalnepal.com/api/use-mypay-payments', $headers, $body);
        $response = $client->send($guzzleRequest);


        // Decode the JSON response
        $responseBody = json_decode($response->getBody(), true);

        // Extract the RedirectURL from the API response
        $redirectUrl = $responseBody['RedirectURL'];
        $redirectId = $responseBody['MerchantTransactionId'];
        $pricing->redirectId =  $redirectId;
        // Save the service to the database
        $pricing->save();

        // Redirect to the specified URL
        return redirect()->away($redirectUrl);
        } else {
            $pricing->save();
            return redirect()->back()->with('success', 'Registered successfully!');

        }
    }



}