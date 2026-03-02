<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';        // Mendefinisikan Nama Tabel Yang Digunakan Oleh Model Ini
    protected $primaryKey = 'user_id';  // Mendefinisikan Primary Key Dari Tabel Yang Digunakan
}
