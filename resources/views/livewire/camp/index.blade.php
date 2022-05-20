<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('camp_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Camp" format="csv" />
                <livewire:excel-export model="Camp" format="xlsx" />
                <livewire:excel-export model="Camp" format="pdf" />
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
                            {{ trans('cruds.camp.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.camp_name') }}
                            @include('components.table.sort', ['field' => 'camp_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.state') }}
                            @include('components.table.sort', ['field' => 'state.state_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.district') }}
                            @include('components.table.sort', ['field' => 'district.district_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.block_name') }}
                            @include('components.table.sort', ['field' => 'block_name.block_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.panchayat_name') }}
                            @include('components.table.sort', ['field' => 'panchayat_name.panchayat_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.habitation_name') }}
                            @include('components.table.sort', ['field' => 'habitation_name.habitation_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.legislative_assembly') }}
                            @include('components.table.sort', ['field' => 'legislative_assembly.assembly_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.parliament_assembly') }}
                            @include('components.table.sort', ['field' => 'parliament_assembly.parliment_assembly_name'])
                        </th>
                        <th>
                            {{ trans('cruds.camp.fields.members') }}
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($camps as $camp)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $camp->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $camp->id }}
                            </td>
                            <td>
                                {{ $camp->camp_name }}
                            </td>
                            <td>
                                @if($camp->state)
                                    <span class="badge badge-relationship">{{ $camp->state->state_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($camp->district)
                                    <span class="badge badge-relationship">{{ $camp->district->district_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($camp->blockName)
                                    <span class="badge badge-relationship">{{ $camp->blockName->block_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($camp->panchayatName)
                                    <span class="badge badge-relationship">{{ $camp->panchayatName->panchayat_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($camp->habitationName)
                                    <span class="badge badge-relationship">{{ $camp->habitationName->habitation_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($camp->legislativeAssembly)
                                    <span class="badge badge-relationship">{{ $camp->legislativeAssembly->assembly_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @if($camp->parliamentAssembly)
                                    <span class="badge badge-relationship">{{ $camp->parliamentAssembly->parliment_assembly_name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @foreach($camp->members as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('camp_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.camps.show', $camp) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('camp_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.camps.edit', $camp) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('camp_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $camp->id }})" wire:loading.attr="disabled">
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
            {{ $camps->links() }}
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