<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('assembly.assembly_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="assembly_name">{{ trans('cruds.assembly.fields.assembly_name') }}</label>
        <input class="form-control" type="text" name="assembly_name" id="assembly_name" required wire:model.defer="assembly.assembly_name">
        <div class="validation-message">
            {{ $errors->first('assembly.assembly_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.assembly.fields.assembly_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('assembly.district_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="district">{{ trans('cruds.assembly.fields.district') }}</label>
        <x-select-list class="form-control" required id="district" name="district" :options="$this->listsForFields['district']" wire:model="assembly.district_id" />
        <div class="validation-message">
            {{ $errors->first('assembly.district_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.assembly.fields.district_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.assemblies.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>