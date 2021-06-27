<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    protected $table = 'settings';
    public $timestamps = true;
    use SoftDeletes,InteractsWithMedia;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','description','meta_keyword','meta_description','facebook','whatsApp','phone','email','location','user'];
}
