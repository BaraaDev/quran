<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Appointment extends Model  implements HasMedia
{
    protected $table = 'appointments';
    public $timestamps = true;
    use SoftDeletes,InteractsWithMedia;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content','user','status'];


}
