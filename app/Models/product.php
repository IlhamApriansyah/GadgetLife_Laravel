<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_id',
        'image',
        'harga',
        'nama',
        'kondisi',
        'min_pesanan',
        'max_pesanan',
        'deskripsi',
        'ulasan',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'id','id');
    }
}
