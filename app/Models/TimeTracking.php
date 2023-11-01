<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeTracking extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'user_id',
        'started_at',
        'stopped_at',
        'description',
        'hourly_rate',
        'fixed_rate',
        'total',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
