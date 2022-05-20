@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.camp.title_singular') }}:
                    {{ trans('cruds.camp.fields.id') }}
                    {{ $camp->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('camp.edit', [$camp])
        </div>
    </div>
</div>
@endsection