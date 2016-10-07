<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'nick_name',
        'name',
        'address',
        'location',
        'postal_code',
        'phone',
        'email',
        'cuit',
        'iibb',
        'bank_data'
    ];

    public function clients(){
        return $this->hasMany('App\Models\Client');
    }
}
