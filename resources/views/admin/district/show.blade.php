@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.district.title_singular') }}:
                    {{ trans('cruds.district.fields.id') }}
                    {{ $district->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.district.fields.id') }}
                            </th>
                            <td>
                                {{ $district->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.district.fields.district_name') }}
                            </th>
                            <td>
                                {{ $district->district_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.district.fields.state') }}
                            </th>
                            <td>
                                @if($district->state)
                                    <span class="badge badge-relationship">{{ $district->state->state_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('district_edit')
                    <a href="{{ route('admin.districts.edit', $district) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.districts.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection