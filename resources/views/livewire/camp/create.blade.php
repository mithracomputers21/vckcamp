<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('camp.camp_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="camp_name">{{ trans('cruds.camp.fields.camp_name') }}</label>
        <input class="form-control" type="text" name="camp_name" id="camp_name" required wire:model.defer="camp.camp_name">
        <div class="validation-message">
            {{ $errors->first('camp.camp_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.camp_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('camp.state_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="state">{{ trans('cruds.camp.fields.state') }}</label>
        <x-select-list class="form-control" required id="state" name="state" :options="$this->listsForFields['state']" wire:model="camp.state_id" />
        <div class="validation-message">
            {{ $errors->first('camp.state_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.state_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('camp.district_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="district">{{ trans('cruds.camp.fields.district') }}</label>
        <x-select-list class="form-control" required id="district" name="district" :options="$this->listsForFields['district']" wire:model="camp.district_id" />
        <div class="validation-message">
            {{ $errors->first('camp.district_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.district_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('camp.block_name_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="block_name">{{ trans('cruds.camp.fields.block_name') }}</label>
        <x-select-list class="form-control" required id="block_name" name="block_name" :options="$this->listsForFields['block_name']" wire:model="camp.block_name_id" />
        <div class="validation-message">
            {{ $errors->first('camp.block_name_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.block_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('camp.panchayat_name_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="panchayat_name">{{ trans('cruds.camp.fields.panchayat_name') }}</label>
        <x-select-list class="form-control" required id="panchayat_name" name="panchayat_name" :options="$this->listsForFields['panchayat_name']" wire:model="camp.panchayat_name_id" />
        <div class="validation-message">
            {{ $errors->first('camp.panchayat_name_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.panchayat_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('camp.habitation_name_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="habitation_name">{{ trans('cruds.camp.fields.habitation_name') }}</label>
        <x-select-list class="form-control" required id="habitation_name" name="habitation_name" :options="$this->listsForFields['habitation_name']" wire:model="camp.habitation_name_id" />
        <div class="validation-message">
            {{ $errors->first('camp.habitation_name_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.habitation_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('camp.legislative_assembly_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="legislative_assembly">{{ trans('cruds.camp.fields.legislative_assembly') }}</label>
        <x-select-list class="form-control" required id="legislative_assembly" name="legislative_assembly" :options="$this->listsForFields['legislative_assembly']" wire:model="camp.legislative_assembly_id" />
        <div class="validation-message">
            {{ $errors->first('camp.legislative_assembly_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.legislative_assembly_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('camp.parliament_assembly_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="parliament_assembly">{{ trans('cruds.camp.fields.parliament_assembly') }}</label>
        <x-select-list class="form-control" required id="parliament_assembly" name="parliament_assembly" :options="$this->listsForFields['parliament_assembly']" wire:model="camp.parliament_assembly_id" />
        <div class="validation-message">
            {{ $errors->first('camp.parliament_assembly_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.parliament_assembly_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('members') ? 'invalid' : '' }}">
        <label class="form-label required" for="members">{{ trans('cruds.camp.fields.members') }}</label>
        <x-select-list class="form-control" required id="members" name="members" wire:model="members" :options="$this->listsForFields['members']" multiple />
        <div class="validation-message">
            {{ $errors->first('members') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.camp.fields.members_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.camps.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>