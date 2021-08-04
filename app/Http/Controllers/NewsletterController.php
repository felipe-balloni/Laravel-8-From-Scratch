<?php

namespace App\Http\Controllers;

use App\Services\ConvertKitNewsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ConvertKitNewsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(request('email'), ['Blog']);
        } catch (Exception $e) {
            ValidationException::withMessages(['email' => 'This email is invalid!']);
        }

        return redirect('/')->with('success', 'You are signed up for our newsletter');
    }
}
