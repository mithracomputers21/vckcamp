<?php

namespace App\Http\Livewire\District;

use App\Models\District;
use App\Models\State;
use Livewire\Component;

class Edit extends Component
{
    public District $district;

    public array $listsForFields = [];

    public function mount(District $district)
    {
        $this->district = $district;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.district.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->district->save();

        return redirect()->route('admin.districts.index');
    }

    protected function rules(): array
    {
        return [
            'district.district_name' => [
                'string',
                'required',
                'unique:districts,district_name,' . $this->district->id,
            ],
            'district.state_id' => [
                'integer',
                'exists:states,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['state'] = State::pluck('state_name', 'id')->toArray();
    }
}
