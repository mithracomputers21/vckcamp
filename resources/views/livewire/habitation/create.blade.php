<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('habitation.habitation_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="habitation_name">{{ trans('cruds.habitation.fields.habitation_name') }}</label>
        <input class="form-control" type="text" name="habitation_name" id="habitation_name" required wire:model.defer="habitation.habitation_name">
        <div class="validation-message">
            {{ $errors->first('habitation.habitation_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.habitation.fields.habitation_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('habitation.panchayat_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="panchayat">{{ trans('cruds.habitation.fields.panchayat') }}</label>
        <x-select-list class="form-control" required id="panchayat" name="panchayat" :options="$this->listsForFields['panchayat']" wire:model="habitation.panchayat_id" />
        <div class="validation-message">
            {{ $errors->first('habitation.panchayat_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.habitation.fields.panchayat_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.habitations.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>