<?php

namespace App\Http\Livewire\User;

use App\Models\Assembly;
use App\Models\District;
use App\Models\Habitation;
use App\Models\Panchayat;
use App\Models\Parliment;
use App\Models\Role;
use App\Models\State;
use App\Models\Union;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $user;

    public array $roles = [];

    public string $password = '';

    public array $listsForFields = [];

    public function mount(User $user)
    {
        $this->user = $user;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.user.create');
    }

    public function submit()
    {
        $this->validate();
        $this->user->password = $this->password;
        $this->user->save();
        $this->user->roles()->sync($this->roles);

        return redirect()->route('admin.users.index');
    }

    protected function rules(): array
    {
        return [
            'user.name' => [
                'string',
                'required',
            ],
            'user.email' => [
                'email:rfc',
                'required',
                'unique:users,email',
            ],
            'password' => [
                'string',
                'required',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'roles.*.id' => [
                'integer',
                'exists:roles,id',
            ],
            'user.locale' => [
                'string',
                'nullable',
            ],
            'user.state_id' => [
                'integer',
                'exists:states,id',
                'required',
            ],
            'user.district_id' => [
                'integer',
                'exists:districts,id',
                'required',
            ],
            'user.block_id' => [
                'integer',
                'exists:unions,id',
                'required',
            ],
            'user.panchayat_id' => [
                'integer',
                'exists:panchayats,id',
                'required',
            ],
            'user.habitation_id' => [
                'integer',
                'exists:habitations,id',
                'required',
            ],
            'user.legislative_assembly_name_id' => [
                'integer',
                'exists:assemblies,id',
                'required',
            ],
            'user.parliament_assemply_id' => [
                'integer',
                'exists:parliments,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['roles']                     = Role::pluck('title', 'id')->toArray();
        $this->listsForFields['state']                     = State::pluck('state_name', 'id')->toArray();
        $this->listsForFields['district']                  = District::pluck('district_name', 'id')->toArray();
        $this->listsForFields['block']                     = Union::pluck('block_name', 'id')->toArray();
        $this->listsForFields['panchayat']                 = Panchayat::pluck('panchayat_name', 'id')->toArray();
        $this->listsForFields['habitation']                = Habitation::pluck('habitation_name', 'id')->toArray();
        $this->listsForFields['legislative_assembly_name'] = Assembly::pluck('assembly_name', 'id')->toArray();
        $this->listsForFields['parliament_assemply']       = Parliment::pluck('parliment_assembly_name', 'id')->toArray();
    }
}
