@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.state.title_singular') }}:
                    {{ trans('cruds.state.fields.id') }}
                    {{ $state->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('state.edit', [$state])
        </div>
    </div>
</div>
@endsection