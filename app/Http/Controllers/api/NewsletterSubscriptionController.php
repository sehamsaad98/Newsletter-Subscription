<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use App\Services\NewsletterService;
use Illuminate\Http\Request;

class NewsletterSubscriptionController extends Controller
{
    protected $newsletterService;

    public function __construct(NewsletterService $newsletterService)
    {
        $this->newsletterService = $newsletterService;
    }

    public function store(EmailRequest $request)
    {
        $email = $request->email;
        $this->newsletterService->subscribe($email);
        return response()->json(['message' => 'Email stored successfully'], 200);
    }






}
