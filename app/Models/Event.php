<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    protected $table = 'events';
    public $timestamps = true;
    use SoftDeletes,InteractsWithMedia;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','description','link','appointment_id','category_id','user','status'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function scopeStatus(){
        return $this->where('status' , 1);
    }
}
