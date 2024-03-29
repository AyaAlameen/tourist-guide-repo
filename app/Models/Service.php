<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Place;
use App\Models\Offer;
use App\Models\Translation;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['place_id', 'cost', 'is_additional'];

    public function place() {
        return $this->belongsTo(Place::class);
    }

    public function offers() {
        return $this->hasMany(Offer::class);
    }

    public function translations()
    {
        return $this->morphMany(Translation::class, 'model');
    }
}
