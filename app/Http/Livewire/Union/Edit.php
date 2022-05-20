<?php

namespace App\Http\Livewire\Union;

use App\Models\District;
use App\Models\Union;
use Livewire\Component;

class Edit extends Component
{
    public Union $union;

    public array $listsForFields = [];

    public function mount(Union $union)
    {
        $this->union = $union;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.union.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->union->save();

        return redirect()->route('admin.unions.index');
    }

    protected function rules(): array
    {
        return [
            'union.block_name' => [
                'string',
                'required',
                'unique:unions,block_name,' . $this->union->id,
            ],
            'union.district_id' => [
                'integer',
                'exists:districts,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['district'] = District::pluck('district_name', 'id')->toArray();
    }
}
