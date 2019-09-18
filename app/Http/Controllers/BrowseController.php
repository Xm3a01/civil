<?php

namespace App\Http\Controllers;

use App\Event;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrowseController extends Controller
{
    public function home()
    {
        $article = DB::table('articles')->latest()->limit(1)->first();
        $articles = DB::table('articles')->latest()->limit(3)->get();
        $nextId = (int)DB::table('articles')->max('id') - 1;
        $article2 = Article::findOrfail($nextId);
        $art = strip_tags(str_limit($article2->body, $limit=400));

        $events = DB::table('events')->latest()->limit(3)->get();

        return view('pages.index')
            ->withArticle($article)->withEvents($events)->withArt($art)->withArticles($articles);
    }
    
    public function about()
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.about')->withAbout($about);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function event()
    {
        $events = Event::all();

        return view('pages.events')->withEvents($events);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $nextArticle = Article::findOrFail($id + 1);
        $prevArticle = Article::findOrFail($id - 1);
        
        return view('pages.show')->withArticle($article)->withNextArticle($nextArticle)->withPrevArticle($prevArticle);
        
    }

    public function ar_home()
    {
        $article = DB::table('articles')->latest()->limit(1)->first();
        $articles = DB::table('articles')->latest()->limit(3)->get();
        $nextId = (int)DB::table('articles')->max('id') - 1;
        $article2 = Article::findOrfail($nextId);
        $art = strip_tags(str_limit($article2->ar_body, $limit=400), $end=' ... <a href="#" class="btn_1">View more </a>');

        $events = DB::table('events')->latest()->limit(3)->get();

        return view('pages.ar.index')
            ->withArticle($article)->withEvents($events)->withArt($art)->withArticles($articles)->withArticle2($article2);
    }
    
    public function ar_about()
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.ar.about')->withAbout($about);
    }

    public function ar_contact()
    {
        return view('pages.ar.contact');
    }

    public function ar_event()
    {
        $events = Event::all();

        return view('pages.ar.events')->withEvents($events);
    }
}
