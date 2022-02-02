<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Industry extends Model
{

    protected $table = 'industrys';

    protected $fillable = ['id','industry','created_at','updated_at' ];



    public function scopeSelection($query)
    {
        return $query->select(['id' ,'industry' ]);
    }


}
