<?php

namespace App\Http\Controllers;

use App\Models\Abonné;
use App\Models\News;
use Illuminate\Http\Request;

class ListAbonneController extends Controller
{
    public function AllSubscriber(News $news)
    {
        return view('admin.news.subscribers',[
            'news' => $news,
            'abonnés' => Abonné::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }
}
