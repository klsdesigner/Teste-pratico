<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Veiculo extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'placa', 'renevam', 'modelo', 'marca', 'ano', 'proprietario',
    ];


    /**
     * Ligação de 1:N (um pra muitos entre produtos e loja)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'proprietario', 'id');
    }
}
