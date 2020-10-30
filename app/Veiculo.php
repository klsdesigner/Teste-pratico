<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable = [
        'placa', 'renevam', 'modelo', 'marca', 'ano', 'proprietario',
    ];


    /**
     * Ligação de 1:N (um pra muitos entre produtos e loja)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
