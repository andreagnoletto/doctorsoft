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

class Patient extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'patients';

    public static $search = [
        'name',
        'email',
        'date_of_birth',
        'cpf',
        'rg',
        'mobile',
        'phone_2',
    ];

    public $orderable = [
        'id',
        'name',
        'email',
        'date_of_birth',
        'cpf',
        'rg',
        'mobile',
        'phone_2',
        'address',
        'address_number',
        'zip_code',
        'city',
        'state',
        'country',
    ];

    public $filterable = [
        'id',
        'name',
        'email',
        'date_of_birth',
        'cpf',
        'rg',
        'mobile',
        'phone_2',
        'address',
        'address_number',
        'zip_code',
        'city',
        'state',
        'country',
    ];

    protected $dates = [
        'date_of_birth',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'cpf',
        'rg',
        'mobile',
        'phone_2',
        'address',
        'address_number',
        'zip_code',
        'city',
        'state',
        'country',
    ];

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
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
