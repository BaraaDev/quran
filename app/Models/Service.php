<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Service extends Model implements HasMedia
{
    protected $table = 'services';
    public $timestamps = true;
    use SoftDeletes,InteractsWithMedia;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','description','icon','user','status'];

    public function scopeStatus(){
        return $this->where('status' , 1);
    }
}
