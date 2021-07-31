<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sket extends Model
{
    use HasFactory;

    protected $table = 'sket';

    protected $fillable = ['nama','npwp','no_sket','penerima_hak','tanggal','nominal','status', 'no_sertifikat'];
}
