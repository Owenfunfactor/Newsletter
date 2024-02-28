<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\Abonné;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSenderController extends Controller
{
    public function mailsend(News $news, Abonné $abonné)
    {
        Mail::send(new NewsletterMail($news,$abonné));

    }
}
