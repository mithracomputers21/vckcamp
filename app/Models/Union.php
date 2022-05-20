<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public $table = 'unions';

    public $orderable = [
        'id',
        'block_name',
        'district.district_name',
    ];

    public $filterable = [
        'id',
        'block_name',
        'district.district_name',
    ];

    protected $fillable = [
        'block_name',
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
