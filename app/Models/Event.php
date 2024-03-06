<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
        'location',
        'date',
        'category',
        'capacity',
        'status',
        'price',
        'organizer_id',
        'acceptation'
    ];

    public function event(){
        return $this->belongsTo(Organizer::class,'organizer_id');
    }
}
