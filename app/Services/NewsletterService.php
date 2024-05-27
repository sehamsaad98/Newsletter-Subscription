<?php
namespace App\Services;

use App\Models\User;

class NewsletterService
{
    public function subscribe($email)
    {
        User::create(['email' => $email]);
    }
    
}