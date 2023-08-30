<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Camione
 *
 * @property $id
 * @property $matricula
 * @property $marca
 * @property $created_at
 * @property $updated_at
 *
 * @property ListaCheck[] $listaChecks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Camione extends Model
{
    
    static $rules = [
		'marca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricula','marca'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function listaChecks()
    {
        return $this->hasMany('App\Models\ListaCheck', 'camioneta_id', 'id');
    }
    

}
