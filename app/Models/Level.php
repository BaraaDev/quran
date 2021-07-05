<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    protected $table = 'levels';
    public $timestamps = true;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','document','icon','user','status'];

    public function article()
    {
        $this->hasMany(Article::class,'level_id','id');
    }

    public function scopeStatus(){
        return $this->where('status' , 1);
    }
}
