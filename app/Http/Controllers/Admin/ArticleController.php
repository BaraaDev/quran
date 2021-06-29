<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;
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
        $this->middleware(['auth','admin']);
    }

    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')->paginate('25');
        return view('admin.article.index',compact('articles'));
    }

    public function create()
    {
        return view('admin.article.create');
    }

    public function store(ArticleRequest $request)
    {
        $articles = Article::create($request->all());
        $articles->tags()->sync($request->tag_id);
        $articles
            ->addMediaFromRequest('image')
            ->UsingName($articles->title)
            ->UsingFileName("$articles->title.jpg")
            ->withCustomProperties([
                'subject'  => $articles->title,
            ])
            ->toMediaCollection('images');

        return redirect()->route('articles.index')->with(['message','تم إنشاء المقال بنجاح']);
    }

    public function show($id)
    {
        $article        = Article::findOrFail($id);
        $recentArticles = Article::orderBy('created_at','DESC')->limit(5)->get();
        $comments       = $article->comments()->orderBy('id','DESC')->limit(30)->get();

        return view('admin.article.show',compact('article','recentArticles','comments'));
    }

    public function edit($id)
    {
        $model = Article::findOrFail($id);
        return view('admin.article.edit',compact('model'));
    }

    public function update(Request $request,$id)
    {
        $articles = Article::findOrFail($id);
        $articles->tags()->sync($request->tag_id);
        $articles->update($request->all());
        if ($request->hasFile('image')) {

            $articles
                ->clearMediaCollection('images')
                ->addMediaFromRequest('image')
                ->UsingName($articles->title)
                ->UsingFileName("$articles->title.jpg")
                ->withCustomProperties([
                     'subject'  => $articles->title,
                ])
                ->toMediaCollection('images');
        }

        return redirect()->route('articles.index')
            ->with(['message' => "تم التعديل بنجاح"]);
    }

    public function destroy($id)
    {
        $articles = Article::findOrFail($id);
        $articles->tags()->detach('tag_id');
        $articles->delete();

        return redirect()->route('articles.index')->with(['message' => "تم حذف المقال بنجاح"]);
    }

    public function commentStore($id ,Request $request){

        $article = Article::findOrFail($id);

        Comment::create([
            'user_id'    => auth()->user()->id,
            'article_id' => $article->id,
            'comment'    => $request->comment

        ]);

        return redirect()->back()->with(['message' => 'تم إضافة التعليق بنجاح']);
    }
}
