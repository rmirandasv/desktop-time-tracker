<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
