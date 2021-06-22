<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class AboutUs extends Model implements HasMedia
{

    protected $table = 'about_us';
    public $timestamps = true;
    use SoftDeletes,InteractsWithMedia;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content'];


}
