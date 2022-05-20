@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.parliment.title_singular') }}:
                    {{ trans('cruds.parliment.fields.id') }}
                    {{ $parliment->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.parliment.fields.id') }}
                            </th>
                            <td>
                                {{ $parliment->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.parliment.fields.parliment_assembly_name') }}
                            </th>
                            <td>
                                {{ $parliment->parliment_assembly_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.parliment.fields.district') }}
                            </th>
                            <td>
                                @if($parliment->district)
                                    <span class="badge badge-relationship">{{ $parliment->district->district_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('parliment_edit')
                    <a href="{{ route('admin.parliments.edit', $parliment) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.parliments.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection