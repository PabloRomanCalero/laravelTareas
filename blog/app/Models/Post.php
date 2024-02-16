<?php

namespace App\Models;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
}
