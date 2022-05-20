@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.union.title_singular') }}:
                    {{ trans('cruds.union.fields.id') }}
                    {{ $union->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('union.edit', [$union])
        </div>
    </div>
</div>
@endsection