<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Mail\LandingContactUsMail;
use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\Feature;
use App\Models\FrontTestimonial;
use App\Models\Meta;
use App\Models\Plan;
use App\Models\Setting;
use App\Models\SubscriptionProduct; // Add this line
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class SingleProductController extends AppBaseController
{

    public function singleproduct()
    {
        // Fetch subscription products from the database
        $subscriptionProducts = SubscriptionProduct::all();

        // Return the shop view with the subscription products data
        return view('front.home.product', ['subscriptionProducts' => $subscriptionProducts]);
    }

}
