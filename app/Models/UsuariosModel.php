<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'fecha_nacimiento',
        'correo',
        'contrasena',
        'telefono',
        'estado',
        'municipio',
        'cod_postal',
        'calle',
        'num_exterior'
    ];

}
