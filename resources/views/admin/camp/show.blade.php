@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.camp.title_singular') }}:
                    {{ trans('cruds.camp.fields.id') }}
                    {{ $camp->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.id') }}
                            </th>
                            <td>
                                {{ $camp->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.camp_name') }}
                            </th>
                            <td>
                                {{ $camp->camp_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.state') }}
                            </th>
                            <td>
                                @if($camp->state)
                                    <span class="badge badge-relationship">{{ $camp->state->state_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.district') }}
                            </th>
                            <td>
                                @if($camp->district)
                                    <span class="badge badge-relationship">{{ $camp->district->district_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.block_name') }}
                            </th>
                            <td>
                                @if($camp->blockName)
                                    <span class="badge badge-relationship">{{ $camp->blockName->block_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.panchayat_name') }}
                            </th>
                            <td>
                                @if($camp->panchayatName)
                                    <span class="badge badge-relationship">{{ $camp->panchayatName->panchayat_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.habitation_name') }}
                            </th>
                            <td>
                                @if($camp->habitationName)
                                    <span class="badge badge-relationship">{{ $camp->habitationName->habitation_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.legislative_assembly') }}
                            </th>
                            <td>
                                @if($camp->legislativeAssembly)
                                    <span class="badge badge-relationship">{{ $camp->legislativeAssembly->assembly_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.parliament_assembly') }}
                            </th>
                            <td>
                                @if($camp->parliamentAssembly)
                                    <span class="badge badge-relationship">{{ $camp->parliamentAssembly->parliment_assembly_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.camp.fields.members') }}
                            </th>
                            <td>
                                @foreach($camp->members as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->name }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('camp_edit')
                    <a href="{{ route('admin.camps.edit', $camp) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.camps.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection