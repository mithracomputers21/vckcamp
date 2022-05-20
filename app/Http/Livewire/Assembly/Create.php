<?php

namespace App\Http\Livewire\Assembly;

use App\Models\Assembly;
use App\Models\District;
use Livewire\Component;

class Create extends Component
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
        return view('livewire.assembly.create');
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
                'unique:assemblies,assembly_name',
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
