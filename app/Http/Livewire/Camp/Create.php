<?php

namespace App\Http\Livewire\Camp;

use App\Models\Assembly;
use App\Models\Camp;
use App\Models\District;
use App\Models\Habitation;
use App\Models\Member;
use App\Models\Panchayat;
use App\Models\Parliment;
use App\Models\State;
use App\Models\Union;
use Livewire\Component;

class Create extends Component
{
    public Camp $camp;

    public array $members = [];

    public array $listsForFields = [];

    public function mount(Camp $camp)
    {
        $this->camp = $camp;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.camp.create');
    }

    public function submit()
    {
        $this->validate();

        $this->camp->save();
        $this->camp->members()->sync($this->members);

        return redirect()->route('admin.camps.index');
    }

    protected function rules(): array
    {
        return [
            'camp.camp_name' => [
                'string',
                'required',
            ],
            'camp.state_id' => [
                'integer',
                'exists:states,id',
                'required',
            ],
            'camp.district_id' => [
                'integer',
                'exists:districts,id',
                'required',
            ],
            'camp.block_name_id' => [
                'integer',
                'exists:unions,id',
                'required',
            ],
            'camp.panchayat_name_id' => [
                'integer',
                'exists:panchayats,id',
                'required',
            ],
            'camp.habitation_name_id' => [
                'integer',
                'exists:habitations,id',
                'required',
            ],
            'camp.legislative_assembly_id' => [
                'integer',
                'exists:assemblies,id',
                'required',
            ],
            'camp.parliament_assembly_id' => [
                'integer',
                'exists:parliments,id',
                'required',
            ],
            'members' => [
                'required',
                'array',
            ],
            'members.*.id' => [
                'integer',
                'exists:members,id',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['state']                = State::pluck('state_name', 'id')->toArray();
        $this->listsForFields['district']             = District::pluck('district_name', 'id')->toArray();
        $this->listsForFields['block_name']           = Union::pluck('block_name', 'id')->toArray();
        $this->listsForFields['panchayat_name']       = Panchayat::pluck('panchayat_name', 'id')->toArray();
        $this->listsForFields['habitation_name']      = Habitation::pluck('habitation_name', 'id')->toArray();
        $this->listsForFields['legislative_assembly'] = Assembly::pluck('assembly_name', 'id')->toArray();
        $this->listsForFields['parliament_assembly']  = Parliment::pluck('parliment_assembly_name', 'id')->toArray();
        $this->listsForFields['members']              = Member::pluck('name', 'id')->toArray();
    }
}
