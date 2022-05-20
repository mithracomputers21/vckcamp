@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.state.title_singular') }}:
                    {{ trans('cruds.state.fields.id') }}
                    {{ $state->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.state.fields.id') }}
                            </th>
                            <td>
                                {{ $state->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.state.fields.state_name') }}
                            </th>
                            <td>
                                {{ $state->state_name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('state_edit')
                    <a href="{{ route('admin.states.edit', $state) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.states.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection