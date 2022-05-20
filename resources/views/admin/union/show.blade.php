@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.union.title_singular') }}:
                    {{ trans('cruds.union.fields.id') }}
                    {{ $union->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.union.fields.id') }}
                            </th>
                            <td>
                                {{ $union->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.union.fields.block_name') }}
                            </th>
                            <td>
                                {{ $union->block_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.union.fields.district') }}
                            </th>
                            <td>
                                @if($union->district)
                                    <span class="badge badge-relationship">{{ $union->district->district_name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('union_edit')
                    <a href="{{ route('admin.unions.edit', $union) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.unions.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection