@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.assembly.title_singular') }}:
                    {{ trans('cruds.assembly.fields.id') }}
                    {{ $assembly->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.assembly.fields.id') }}
                            </th>
                            <td>
                                {{ $assembly->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.assembly.fields.assembly_name') }}
                            </th>
                            <td>
                                {{ $assembly->assembly_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.assembly.fields.district') }}
                            </th>
                            <td>
                                @if($assembly->district)
                                    <span class="badge badge-relationship">{{ $assembly->district->district_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('assembly_edit')
                    <a href="{{ route('admin.assemblies.edit', $assembly) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.assemblies.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection