<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'name',
        'description',
        'category_id',
        'cycle',
        'status',
        'price',
        'creation_date'
    ];

    public function category(){
        return $this->belongsTo('App\Models\CategoryService');
    }

}
