<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $table="advert";

    public function author(){
        return $this->belongsTo(User::class,'author_id','id');
    }
}
