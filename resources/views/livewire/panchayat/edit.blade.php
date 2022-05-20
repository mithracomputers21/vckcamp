<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('panchayat.panchayat_name') ? 'invalid' : '' }}">
        <label class="form-label" for="panchayat_name">{{ trans('cruds.panchayat.fields.panchayat_name') }}</label>
        <input class="form-control" type="text" name="panchayat_name" id="panchayat_name" wire:model.defer="panchayat.panchayat_name">
        <div class="validation-message">
            {{ $errors->first('panchayat.panchayat_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.panchayat.fields.panchayat_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('panchayat.block_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="block">{{ trans('cruds.panchayat.fields.block') }}</label>
        <x-select-list class="form-control" required id="block" name="block" :options="$this->listsForFields['block']" wire:model="panchayat.block_id" />
        <div class="validation-message">
            {{ $errors->first('panchayat.block_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.panchayat.fields.block_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.panchayats.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>