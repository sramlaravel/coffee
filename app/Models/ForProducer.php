<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Model;

class ForProducer extends Model
{


    protected $table = 'forproducers';

    protected $fillable = ['id', 'title_ar', 'title_en', 'description_ar', 'description_en', 'image', 'created_at', 'updated_at'];


    protected static function boot()
    {
        parent::boot();
    }
    public function scopeActive($query)
    {
        return $query->where('statu', 1);
    }

    public function  scopeSelection($query)
    {

        return $query->select('title_ar', 'title_en', 'description_ar', 'description_en', 'image');
    }


    public function getActive()
    {
        return   $this->statu == 1 ? 'مفعل'  : 'غير مفعل';
    } //
}
