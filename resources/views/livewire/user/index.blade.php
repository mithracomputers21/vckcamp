<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('user_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="User" format="csv" />
                <livewire:excel-export model="User" format="xlsx" />
                <livewire:excel-export model="User" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.user.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email') }}
                            @include('components.table.sort', ['field' => 'email'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.email_verified_at') }}
                            @include('components.table.sort', ['field' => 'email_verified_at'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.roles') }}
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.locale') }}
                            @include('components.table.sort', ['field' => 'locale'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.state') }}
                            @include('components.table.sort', ['field' => 'state.state_name'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.district') }}
                            @include('components.table.sort', ['field' => 'district.district_name'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.block') }}
                            @include('components.table.sort', ['field' => 'block.block_name'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.panchayat') }}
                            @include('components.table.sort', ['field' => 'panchayat.panchayat_name'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.habitation') }}
                            @include('components.table.sort', ['field' => 'habitation.habitation_name'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.legislative_assembly_name') }}
                            @include('components.table.sort', ['field' => 'legislative_assembly_name.assembly_name'])
                        </th>
                        <th>
                            {{ trans('cruds.user.fields.parliament_assemply') }}
                            @include('components.table.sort', ['field' => 'parliament_assemply.parliment_assembly_name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $user->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $user->id }}
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $user->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $user->email }}
                                </a>
                            </td>
                            <td>
                                {{ $user->email_verified_at }}
                            </td>
                            <td>
                                @foreach($user->roles as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->title }}</span>
                                @endforeach
                            </td>
                            <td>
                                {{ $user->locale }}
                            </td>
                            <td>
                                @if($user->state)
                                    <span class="badge badge-relationship">{{ $user->state->state_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($user->district)
                                    <span class="badge badge-relationship">{{ $user->district->district_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($user->block)
                                    <span class="badge badge-relationship">{{ $user->block->block_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($user->panchayat)
                                    <span class="badge badge-relationship">{{ $user->panchayat->panchayat_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($user->habitation)
                                    <span class="badge badge-relationship">{{ $user->habitation->habitation_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($user->legislativeAssemblyName)
                                    <span class="badge badge-relationship">{{ $user->legislativeAssemblyName->assembly_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($user->parliamentAssemply)
                                    <span class="badge badge-relationship">{{ $user->parliamentAssemply->parliment_assembly_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('user_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.users.show', $user) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('user_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.users.edit', $user) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('user_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $user->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $users->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush