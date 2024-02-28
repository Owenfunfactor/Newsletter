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
        Mail::to($abonné->email)->send(new NewsletterMail($news));
        return back()->with('success','Le mail a bien été envoyé');
    }

    public function mailsendAll(News $news)
    {
        $abonnés = Abonné::all();
        foreach ($abonnés as $abonné){
            Mail::to($abonné->email)->send(new NewsletterMail($news));
        }
        return back()->with('success','Les mails ont bien été envoyés');

    }
}
