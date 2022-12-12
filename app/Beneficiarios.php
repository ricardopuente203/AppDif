<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Beneficiarios extends Model
{
    protected $fillable=['NombreCompleto','FechaNacimiento','Domicilio','ProgramaBeneficiado','NumeroTelefono','FechaAceptacion','Curp','CredencialLector'];
    use Searchable;
}

