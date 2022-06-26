<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Kelas()
    {
        return $this->hasOne(Kelas::class, 'id', 'kelas_id');
    }

    public function Postby()
    {
        return $this->hasOne(User::class, 'id', 'post_by');
    }

    public function Postkomen()
    {
        return $this->hasMany(CommentPost::class, 'post_id', 'id');
    }
}
