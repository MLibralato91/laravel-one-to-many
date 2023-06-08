<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description', 'type_id', 'slug'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
