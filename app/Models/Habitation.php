<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitation extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public $table = 'habitations';

    public $orderable = [
        'id',
        'habitation_name',
        'panchayat.panchayat_name',
    ];

    public $filterable = [
        'id',
        'habitation_name',
        'panchayat.panchayat_name',
    ];

    protected $fillable = [
        'habitation_name',
        'panchayat_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function panchayat()
    {
        return $this->belongsTo(Panchayat::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
