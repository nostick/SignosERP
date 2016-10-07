<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'name',
        'last_name',
        'company',
        'responsible',
        'responsible_id',
        'home_phone',
        'mobile_phone',
        'email',
        'address',
        'type'
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function responsibleType(){
        return $this->hasOne('App\Models\Responsibles','id','responsible_id');
    }
}
