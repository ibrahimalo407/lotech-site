<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'text', 'author'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
