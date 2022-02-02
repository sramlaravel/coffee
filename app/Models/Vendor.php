<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vendor extends Model
{
    use Notifiable;

    protected $table = 'vendors';

    protected $fillable = [
        'latitude', 'longitude', 'f_name','l_name','company_name', 'mobile', 'password', 'address', 'email', 'logo', 'industry_id',


        'city', 'zipcode', 'state_province_region', 'Country_id', 'website', 'acutionsite_id', 'logo',  'approved_by',
        'registry_status_id','active', 'created_at', 'updated_at'
    ];

    protected $hidden = ['category_id', 'password'];


    public function scopeActive($query)
    {

        return $query->where('active', 1);
    }

    public function getLogoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }


    public function scopeSelection($query)
    {
        return $query->select('id', 'latitude', 'longitude', 'f_name','l_name','company_name', 'mobile', 'password', 'address', 'email', 'logo', 'industry_id',


            'city', 'zipcode', 'state_province_region', 'Country_id', 'website', 'acutionsite_id', 'logo',  'approved_by',
            'registry_status_id','active');
    }


    public function category()
    {

        return $this->belongsTo('App\Models\MainCategory', 'category_id', 'id');
    }

    public function getActive()
    {
        return $this->active == 1 ? 'مفعل' : 'غير مفعل';

    }


    public function setPasswordAttribute($password)
    {
        if (!empty($password)) {
            $this->attributes['password'] = bcrypt($password);
        }
    }
}
