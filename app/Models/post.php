<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'body'];
   protected $table = 'articles'; 

    public function author():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
