<?php

namespace App\Http\Livewire\State;

use App\Models\State;
use Livewire\Component;

class Create extends Component
{
    public State $state;

    public function mount(State $state)
    {
        $this->state = $state;
    }

    public function render()
    {
        return view('livewire.state.create');
    }

    public function submit()
    {
        $this->validate();

        $this->state->save();

        return redirect()->route('admin.states.index');
    }

    protected function rules(): array
    {
        return [
            'state.state_name' => [
                'string',
                'required',
                'unique:states,state_name',
            ],
        ];
    }
}
