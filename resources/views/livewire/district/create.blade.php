<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('district.district_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="district_name">{{ trans('cruds.district.fields.district_name') }}</label>
        <input class="form-control" type="text" name="district_name" id="district_name" required wire:model.defer="district.district_name">
        <div class="validation-message">
            {{ $errors->first('district.district_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.district.fields.district_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('district.state_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="state">{{ trans('cruds.district.fields.state') }}</label>
        <x-select-list class="form-control" required id="state" name="state" :options="$this->listsForFields['state']" wire:model="district.state_id" />
        <div class="validation-message">
            {{ $errors->first('district.state_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.district.fields.state_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.districts.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>