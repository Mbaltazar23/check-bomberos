<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Herramienta
 *
 * @property $id
 * @property $nombre
 * @property $estado
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Herramienta extends Model
{
    
    static $rules = [
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','estado'];

}
