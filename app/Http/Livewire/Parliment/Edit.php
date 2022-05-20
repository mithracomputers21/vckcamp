<?php

namespace App\Http\Livewire\Parliment;

use App\Models\District;
use App\Models\Parliment;
use Livewire\Component;

class Edit extends Component
{
    public Parliment $parliment;

    public array $listsForFields = [];

    public function mount(Parliment $parliment)
    {
        $this->parliment = $parliment;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.parliment.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->parliment->save();

        return redirect()->route('admin.parliments.index');
    }

    protected function rules(): array
    {
        return [
            'parliment.parliment_assembly_name' => [
                'string',
                'nullable',
            ],
            'parliment.district_id' => [
                'integer',
                'exists:districts,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['district'] = District::pluck('district_name', 'id')->toArray();
    }
}
