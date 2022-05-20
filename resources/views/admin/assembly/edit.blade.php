@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.assembly.title_singular') }}:
                    {{ trans('cruds.assembly.fields.id') }}
                    {{ $assembly->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('assembly.edit', [$assembly])
        </div>
    </div>
</div>
@endsection