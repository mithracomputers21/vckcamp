<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('member.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.member.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="member.name">
        <div class="validation-message">
            {{ $errors->first('member.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.member.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('member.father_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="father_name">{{ trans('cruds.member.fields.father_name') }}</label>
        <input class="form-control" type="text" name="father_name" id="father_name" required wire:model.defer="member.father_name">
        <div class="validation-message">
            {{ $errors->first('member.father_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.member.fields.father_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('member.mobile_no') ? 'invalid' : '' }}">
        <label class="form-label required" for="mobile_no">{{ trans('cruds.member.fields.mobile_no') }}</label>
        <input class="form-control" type="text" name="mobile_no" id="mobile_no" required wire:model.defer="member.mobile_no">
        <div class="validation-message">
            {{ $errors->first('member.mobile_no') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.member.fields.mobile_no_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('member.address') ? 'invalid' : '' }}">
        <label class="form-label required" for="address">{{ trans('cruds.member.fields.address') }}</label>
        <textarea class="form-control" name="address" id="address" required wire:model.defer="member.address" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('member.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.member.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('member.document_proof') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.member.fields.document_proof') }}</label>
        <select class="form-control" wire:model="member.document_proof">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['document_proof'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('member.document_proof') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.member.fields.document_proof_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.member_document_photo') ? 'invalid' : '' }}">
        <label class="form-label required" for="document_photo">{{ trans('cruds.member.fields.document_photo') }}</label>
        <x-dropzone id="document_photo" name="document_photo" action="{{ route('admin.members.storeMedia') }}" collection-name="member_document_photo" max-file-size="5" max-width="4096" max-height="4096" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.member_document_photo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.member.fields.document_photo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('member.post_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="post_name">{{ trans('cruds.member.fields.post_name') }}</label>
        <input class="form-control" type="text" name="post_name" id="post_name" required wire:model.defer="member.post_name">
        <div class="validation-message">
            {{ $errors->first('member.post_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.member.fields.post_name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.members.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>