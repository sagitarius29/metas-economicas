<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'metas';

    public function montoFaltante()
    {
        return $this->total - $this->abonado;
    }

    public function porcentaje()
    {
        return round(($this->abonado * 100) / $this->total);
    }

}
