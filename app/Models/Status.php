<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id_status'];
    public $table = "status";
    protected $primaryKey = 'id_status';

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
