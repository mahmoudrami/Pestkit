<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getImagePathAttribute(){
        if($this->image)
            return asset('images/'.$this->image);
        else
            return asset('images/no-image');
    }
}
