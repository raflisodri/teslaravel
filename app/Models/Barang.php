<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['id_suplier','nama','stok','jenis'];
    protected $table = 'barangs';

    public function Suplier() {
        return $this->belongsTo(Suplier::class, 'id_suplier','id');
    }
}
