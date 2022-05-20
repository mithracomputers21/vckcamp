<?php

namespace App\Http\Livewire\Assembly;

use App\Models\Assembly;
use App\Models\District;
use Livewire\Component;

class Edit extends Component
{
    public Assembly $assembly;

    public array $listsForFields = [];

    public function mount(Assembly $assembly)
    {
        $this->assembly = $assembly;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.assembly.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->assembly->save();

        return redirect()->route('admin.assemblies.index');
    }

    protected function rules(): array
    {
        return [
            'assembly.assembly_name' => [
                'string',
                'required',
                'unique:assemblies,assembly_name,' . $this->assembly->id,
            ],
            'assembly.district_id' => [
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
