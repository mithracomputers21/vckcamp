<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parliment extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public $table = 'parliments';

    public $orderable = [
        'id',
        'parliment_assembly_name',
        'district.district_name',
    ];

    public $filterable = [
        'id',
        'parliment_assembly_name',
        'district.district_name',
    ];

    protected $fillable = [
        'parliment_assembly_name',
        'district_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
