<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facturas extends Model
{
    protected $fillable = ['id', 'id_cliente', 'id_factura', 'concepto', 'valor_pagar', 'fecha', 'pdf'];
}
