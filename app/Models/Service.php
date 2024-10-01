<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'description', 'icon', 'background_image'];

    public function benefits()
    {
        // Supposez que vous avez une relation ou un tableau pour les avantages
        return $this->hasMany(Benefit::class);
    }

    public function process_steps()
    {
        // Relation pour les étapes de processus
        return $this->hasMany(ProcessStep::class);
    }

    public function testimonials()
    {
        // Relation pour les témoignages
        return $this->hasMany(Testimonial::class);
    }

    public function faqs()
    {
        // Relation pour les questions fréquentes
        return $this->hasMany(FAQ::class);
    }
}

