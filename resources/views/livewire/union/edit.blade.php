<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('union.block_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="block_name">{{ trans('cruds.union.fields.block_name') }}</label>
        <input class="form-control" type="text" name="block_name" id="block_name" required wire:model.defer="union.block_name">
        <div class="validation-message">
            {{ $errors->first('union.block_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.union.fields.block_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('union.district_id') ? 'invalid' : '' }}">
        <label class="form-label" for="district">{{ trans('cruds.union.fields.district') }}</label>
        <x-select-list class="form-control" id="district" name="district" :options="$this->listsForFields['district']" wire:model="union.district_id" />
        <div class="validation-message">
            {{ $errors->first('union.district_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.union.fields.district_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.unions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>