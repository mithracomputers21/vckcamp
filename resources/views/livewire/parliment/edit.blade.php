<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('parliment.parliment_assembly_name') ? 'invalid' : '' }}">
        <label class="form-label" for="parliment_assembly_name">{{ trans('cruds.parliment.fields.parliment_assembly_name') }}</label>
        <input class="form-control" type="text" name="parliment_assembly_name" id="parliment_assembly_name" wire:model.defer="parliment.parliment_assembly_name">
        <div class="validation-message">
            {{ $errors->first('parliment.parliment_assembly_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.parliment.fields.parliment_assembly_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('parliment.district_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="district">{{ trans('cruds.parliment.fields.district') }}</label>
        <x-select-list class="form-control" required id="district" name="district" :options="$this->listsForFields['district']" wire:model="parliment.district_id" />
        <div class="validation-message">
            {{ $errors->first('parliment.district_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.parliment.fields.district_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.parliments.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>