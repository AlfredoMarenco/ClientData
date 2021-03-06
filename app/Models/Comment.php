<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
