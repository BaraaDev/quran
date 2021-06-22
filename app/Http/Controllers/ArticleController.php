<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')->paginate('25');
        SEOMeta::setTitle('دروس ومقالات موقع دار أفنان');
        SEOMeta::setDescription('عرض المقالات والدروس الخاصه بكل المستويات فى موقع دار أفنان عرض المقالات والدروس الخاصه بكل المستويات فى موقع دار أفنان عرض المقالات والدروس الخاصه بكل المستويات فى موقع دار أفنان');
        SEOMeta::setCanonical('https://quran.test/articles');

        OpenGraph::setTitle('دروس ومقالات موقع دار أفنان');
        OpenGraph::setDescription('دروس ومقالات موقع دار أفنان');
        OpenGraph::setUrl(env('APP_URL'));
        OpenGraph::addProperty('type', 'دروس ومقالات موقع دار أفنان');

        TwitterCard::setTitle('دروس ومقالات موقع دار أفنان');
        TwitterCard::setSite(route('article.index'));

        JsonLd::setTitle('دروس ومقالات موقع دار أفنان');

        return view('articles',compact('articles'));
    }

    public function show($id)
    {

        $article = Article::findOrFail($id);
        $comments = $article->comments()->with('user')->orderBy('id','DESC')->limit(30)->get();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('عرض المقالات والدروس الخاصه بكل المستويات فى موقع دار أفنان عرض المقالات والدروس الخاصه بكل المستويات فى موقع دار أفنان عرض المقالات والدروس الخاصه بكل المستويات فى موقع دار أفنان');
        SEOMeta::setCanonical(route('article.show',$article->id));

        OpenGraph::setTitle($article->title);
        OpenGraph::setDescription($article->title);
        OpenGraph::setUrl(route('article.show',$article->id));
        OpenGraph::addProperty('type', $article->title);

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite(route('article.show',$article->id));

        JsonLd::setTitle($article->title);

        return view('articles-show',compact('article','comments'));
    }


    public function commentStore($id ,Request $request){

        $article = Article::findOrFail($id);

        Comment::create([
            'user_id'    => auth()->user()->id,
            'article_id' => $article->id,
            'comment'    => $request->comment

        ]);

        return redirect()->route('article.show' , ['id' => $article->id ,'#comments']);
    }
}
