<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
    ];

    public function organizer()
    {
        return $this->belongsTo(User::class,'id');
    }
}
