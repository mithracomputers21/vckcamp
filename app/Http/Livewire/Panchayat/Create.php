<?php

namespace App\Http\Livewire\Panchayat;

use App\Models\Panchayat;
use App\Models\Union;
use Livewire\Component;

class Create extends Component
{
    public Panchayat $panchayat;

    public array $listsForFields = [];

    public function mount(Panchayat $panchayat)
    {
        $this->panchayat = $panchayat;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.panchayat.create');
    }

    public function submit()
    {
        $this->validate();

        $this->panchayat->save();

        return redirect()->route('admin.panchayats.index');
    }

    protected function rules(): array
    {
        return [
            'panchayat.panchayat_name' => [
                'string',
                'nullable',
            ],
            'panchayat.block_id' => [
                'integer',
                'exists:unions,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['block'] = Union::pluck('block_name', 'id')->toArray();
    }
}
