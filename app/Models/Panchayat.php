<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panchayat extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public $table = 'panchayats';

    public $orderable = [
        'id',
        'panchayat_name',
        'block.block_name',
    ];

    public $filterable = [
        'id',
        'panchayat_name',
        'block.block_name',
    ];

    protected $fillable = [
        'panchayat_name',
        'block_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function block()
    {
        return $this->belongsTo(Union::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
