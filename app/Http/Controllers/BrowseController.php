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
        $art = '';
        $article = DB::table('articles')->latest()->limit(1)->first();
        $articles = DB::table('articles')->latest()->limit(3)->get();
        $nextId = (int)DB::table('articles')->max('id') - 1;
        $article2 = Article::findOrfail($nextId);
        $art = strip_tags(str_limit($article2->body, $limit=400));
        $events = DB::table('events')->latest()->limit(3)->get();
        $about = DB::table('abouts')->latest()->limit(1)->first();

        return view('pages.index')
            ->withArticle($article)->withEvents($events)->withArt($art)->withArticles($articles)->withArticle2($article2)->withAbout($about);
    }
    
    public function about()
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.about')->withAbout($about);
    }

    public function contact()
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.contact')->withAbout($about);
    }

    public function event()
    {
        $events = Event::all();
        $about = DB::table('abouts')->latest()->limit(1)->first();

        return view('pages.events')->withEvents($events)->withAbout($about);
    }

    public function show($id)
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        $recently = DB::table('articles')->latest()->limit(3)->get();
        $article = Article::findOrFail($id);
        $articles = Article::all();
        
        return view('pages.show')->withArticle($article)->withArticles($articles)->withRecently($recently)->withAbout($about);
        
    }

    public function all()
    {
        $articles = Article::all();
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.all')->withArticles($articles)->withAbout($about);
    }
    
    //arabic

    public function ar_home()
    {
        $article = DB::table('articles')->latest()->limit(1)->first();
        $articles = DB::table('articles')->latest()->limit(3)->get();
        $nextId = (int)DB::table('articles')->max('id') - 1;
        $article2 = Article::findOrfail($nextId);
        $art = strip_tags(str_limit($article2->ar_body, $limit=400), $end=' ... <a href="#" class="btn_1">View more </a>');

        $events = DB::table('events')->latest()->limit(3)->get();
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.ar.index')
            ->withArticle($article)->withEvents($events)->withArt($art)->withArticles($articles)->withArticle2($article2)->withAbout($about);
    }
    
    public function ar_about()
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.ar.about')->withAbout($about);
    }

    public function ar_contact()
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        return view('pages.ar.contact')->withAbout($about);
    }

    public function ar_event()
    {
        $events = Event::all();
        $about = DB::table('abouts')->latest()->limit(1)->first();

        return view('pages.ar.events')->withEvents($events)->withAbout($about);
    }

    public function ar_show($id)
    {
        $about = DB::table('abouts')->latest()->limit(1)->first();
        $recently = DB::table('articles')->latest()->limit(3)->get();
        $article = Article::findOrFail($id);
        $articles = Article::all();
        
        return view('pages.ar.show')->withArticle($article)->withArticles($articles)->withRecently($recently)->withAbout($about);
        
    }

    public function ar_all()
    {
        $articles = Article::all();
        $about = DB::table('abouts')->latest()->limit(1)->first();

        return view('pages.ar.all')->withArticles($articles)->withAbout($about);
    }


    //controll function 
}
