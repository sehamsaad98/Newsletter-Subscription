<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Models\User;
use App\Services\NewsletterService;

class NewsletterSubscriptionController extends Controller
{
    protected $newsletterService;

    public function __construct(NewsletterService $newsletterService)
    {
        $this->newsletterService = $newsletterService;
    }
    public function index()
    {
        return view('welcome');
    }



    public function store(EmailRequest $request)
    {
        $request->validated();
        $email = $request->email;
        $this->newsletterService->subscribe($email);

        return redirect()->back()->with('success', 'Your Email is stored successfully')->withInput();
    }








}
