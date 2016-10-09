<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryService extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories_services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =[
        'name',
        'slug'
    ];

}
