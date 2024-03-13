<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'status',
    ];

    public function event()
    {
        return $this->hasMany(Event::class, 'organizer_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
