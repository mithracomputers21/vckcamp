<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public $table = 'districts';

    public $orderable = [
        'id',
        'district_name',
        'state.state_name',
    ];

    public $filterable = [
        'id',
        'district_name',
        'state.state_name',
    ];

    protected $fillable = [
        'district_name',
        'state_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
