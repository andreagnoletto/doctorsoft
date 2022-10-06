<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'events';

    public $orderable = [
        'id',
        'event_date',
        'event_time',
        'patient.name',
    ];

    public $filterable = [
        'id',
        'event_date',
        'event_time',
        'patient.name',
    ];

    protected $fillable = [
        'event_date',
        'event_time',
        'patient_id',
    ];

    protected $dates = [
        'event_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getEventDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setEventDateAttribute($value)
    {
        $this->attributes['event_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
