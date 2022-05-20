<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camp extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use Tenantable;

    public $table = 'camps';

    public $orderable = [
        'id',
        'camp_name',
        'state.state_name',
        'district.district_name',
        'block_name.block_name',
        'panchayat_name.panchayat_name',
        'habitation_name.habitation_name',
        'legislative_assembly.assembly_name',
        'parliament_assembly.parliment_assembly_name',
    ];

    public $filterable = [
        'id',
        'camp_name',
        'state.state_name',
        'district.district_name',
        'block_name.block_name',
        'panchayat_name.panchayat_name',
        'habitation_name.habitation_name',
        'legislative_assembly.assembly_name',
        'parliament_assembly.parliment_assembly_name',
        'members.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'camp_name',
        'state_id',
        'district_id',
        'block_name_id',
        'panchayat_name_id',
        'habitation_name_id',
        'legislative_assembly_id',
        'parliament_assembly_id',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function blockName()
    {
        return $this->belongsTo(Union::class);
    }

    public function panchayatName()
    {
        return $this->belongsTo(Panchayat::class);
    }

    public function habitationName()
    {
        return $this->belongsTo(Habitation::class);
    }

    public function legislativeAssembly()
    {
        return $this->belongsTo(Assembly::class);
    }

    public function parliamentAssembly()
    {
        return $this->belongsTo(Parliment::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
