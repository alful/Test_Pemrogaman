<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $table = "produk";
    protected $guarded = ['id_produk'];
    protected $primaryKey = 'id_produk';

    protected $with = ['kategori', 'status'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
