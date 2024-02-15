<?php

namespace App\Models;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $table = 'autor';

    public function libros(){
        return $this->hasMany(Libro::class);
    }
}
