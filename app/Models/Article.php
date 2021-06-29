<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    protected $table = 'articles';
    public $timestamps = true;
    use SoftDeletes, InteractsWithMedia;

    protected $dates    = ['deleted_at'];
    protected $fillable = ['title','content','link','level_id','user','status'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'article_tag','article_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class,'article_id','id');
    }

    public function scopeArticleStatus()
    {
        return $this->where('status' , 1);
    }
}
