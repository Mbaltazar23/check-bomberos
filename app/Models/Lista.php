<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lista
 *
 * @property $id
 * @property $herramienta_id
 * @property $camioneta_id
 * @property $check
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione $camione
 * @property Herramienta $herramienta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lista extends Model
{

    static $rules = [
        'herramienta_id' => 'required',
        'camioneta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['herramienta_id', 'camioneta_id', 'check'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'id', 'camioneta_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function herramienta()
    {
        return $this->hasOne('App\Models\Herramienta', 'id', 'herramienta_id');
    }

}
