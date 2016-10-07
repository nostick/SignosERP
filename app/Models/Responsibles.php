<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsibles extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'responsibles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'social_rason',
        'cuit',
        'address'
    ];

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
}
