<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = true;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['name','user','status'];

    public function scopeStatus(){
        return $this->where('status' , 1);
    }
}
