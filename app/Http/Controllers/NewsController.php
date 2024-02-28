<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\Abonné;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index',[
            'news' => News::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = new News();
        return view('admin.news.form',[
           'news' => $news
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $news = News::create($request->validated());
        return to_route('news.index')->with('success','La news a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.form',[
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->validated());
        return to_route('news.index')->with('success','La news a bien été mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return to_route('news.index')->with('success','La news a bien été supprimé');
    }


}
