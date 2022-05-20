@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.member.title_singular') }}:
                    {{ trans('cruds.member.fields.id') }}
                    {{ $member->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.id') }}
                            </th>
                            <td>
                                {{ $member->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.name') }}
                            </th>
                            <td>
                                {{ $member->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.father_name') }}
                            </th>
                            <td>
                                {{ $member->father_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.mobile_no') }}
                            </th>
                            <td>
                                {{ $member->mobile_no }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.address') }}
                            </th>
                            <td>
                                {{ $member->address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.document_proof') }}
                            </th>
                            <td>
                                {{ $member->document_proof_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.document_photo') }}
                            </th>
                            <td>
                                @foreach($member->document_photo as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.member.fields.post_name') }}
                            </th>
                            <td>
                                {{ $member->post_name }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('member_edit')
                    <a href="{{ route('admin.members.edit', $member) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection