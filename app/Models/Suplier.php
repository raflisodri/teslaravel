<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;
    protected $fillable = ['nama','alamat','nama_perusahaan'];
    protected $table = 'supliers';

    public function Suplier() {
        return $this->hasMany(Suplier::class, 'id_suplier','id');
    }
}
