<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function Kelas()
    {
        return $this->hasOne(Kelas::class, 'kelas_id', 'id');
    }
}
