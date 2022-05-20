<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('member_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Member" format="csv" />
                <livewire:excel-export model="Member" format="xlsx" />
                <livewire:excel-export model="Member" format="pdf" />
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
                            {{ trans('cruds.member.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.father_name') }}
                            @include('components.table.sort', ['field' => 'father_name'])
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.mobile_no') }}
                            @include('components.table.sort', ['field' => 'mobile_no'])
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.address') }}
                            @include('components.table.sort', ['field' => 'address'])
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.document_proof') }}
                            @include('components.table.sort', ['field' => 'document_proof'])
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.document_photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.member.fields.post_name') }}
                            @include('components.table.sort', ['field' => 'post_name'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $member)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $member->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $member->id }}
                            </td>
                            <td>
                                {{ $member->name }}
                            </td>
                            <td>
                                {{ $member->father_name }}
                            </td>
                            <td>
                                {{ $member->mobile_no }}
                            </td>
                            <td>
                                {{ $member->address }}
                            </td>
                            <td>
                                {{ $member->document_proof_label }}
                            </td>
                            <td>
                                @foreach($member->document_photo as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $member->post_name }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('member_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.members.show', $member) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('member_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.members.edit', $member) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('member_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $member->id }})" wire:loading.attr="disabled">
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
            {{ $members->links() }}
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