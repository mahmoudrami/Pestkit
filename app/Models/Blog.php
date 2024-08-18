<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function getImagePathAttribute(){
        if($this->image)
            return asset('images/'.$this->image);
        else
            return asset('images/no-image');
    }
}
