<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('user.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.user.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="user.name">
        <div class="validation-message">
            {{ $errors->first('user.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.email') ? 'invalid' : '' }}">
        <label class="form-label required" for="email">{{ trans('cruds.user.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" required wire:model.defer="user.email">
        <div class="validation-message">
            {{ $errors->first('user.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.password') ? 'invalid' : '' }}">
        <label class="form-label" for="password">{{ trans('cruds.user.fields.password') }}</label>
        <input class="form-control" type="password" name="password" id="password" wire:model.defer="password">
        <div class="validation-message">
            {{ $errors->first('user.password') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.password_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('roles') ? 'invalid' : '' }}">
        <label class="form-label required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
        <x-select-list class="form-control" required id="roles" name="roles" wire:model="roles" :options="$this->listsForFields['roles']" multiple />
        <div class="validation-message">
            {{ $errors->first('roles') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.roles_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.locale') ? 'invalid' : '' }}">
        <label class="form-label" for="locale">{{ trans('cruds.user.fields.locale') }}</label>
        <input class="form-control" type="text" name="locale" id="locale" wire:model.defer="user.locale">
        <div class="validation-message">
            {{ $errors->first('user.locale') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.locale_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.state_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="state">{{ trans('cruds.user.fields.state') }}</label>
        <x-select-list class="form-control" required id="state" name="state" :options="$this->listsForFields['state']" wire:model="user.state_id" />
        <div class="validation-message">
            {{ $errors->first('user.state_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.state_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.district_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="district">{{ trans('cruds.user.fields.district') }}</label>
        <x-select-list class="form-control" required id="district" name="district" :options="$this->listsForFields['district']" wire:model="user.district_id" />
        <div class="validation-message">
            {{ $errors->first('user.district_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.district_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.block_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="block">{{ trans('cruds.user.fields.block') }}</label>
        <x-select-list class="form-control" required id="block" name="block" :options="$this->listsForFields['block']" wire:model="user.block_id" />
        <div class="validation-message">
            {{ $errors->first('user.block_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.block_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.panchayat_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="panchayat">{{ trans('cruds.user.fields.panchayat') }}</label>
        <x-select-list class="form-control" required id="panchayat" name="panchayat" :options="$this->listsForFields['panchayat']" wire:model="user.panchayat_id" />
        <div class="validation-message">
            {{ $errors->first('user.panchayat_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.panchayat_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.habitation_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="habitation">{{ trans('cruds.user.fields.habitation') }}</label>
        <x-select-list class="form-control" required id="habitation" name="habitation" :options="$this->listsForFields['habitation']" wire:model="user.habitation_id" />
        <div class="validation-message">
            {{ $errors->first('user.habitation_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.habitation_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.legislative_assembly_name_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="legislative_assembly_name">{{ trans('cruds.user.fields.legislative_assembly_name') }}</label>
        <x-select-list class="form-control" required id="legislative_assembly_name" name="legislative_assembly_name" :options="$this->listsForFields['legislative_assembly_name']" wire:model="user.legislative_assembly_name_id" />
        <div class="validation-message">
            {{ $errors->first('user.legislative_assembly_name_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.legislative_assembly_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('user.parliament_assemply_id') ? 'invalid' : '' }}">
        <label class="form-label" for="parliament_assemply">{{ trans('cruds.user.fields.parliament_assemply') }}</label>
        <x-select-list class="form-control" id="parliament_assemply" name="parliament_assemply" :options="$this->listsForFields['parliament_assemply']" wire:model="user.parliament_assemply_id" />
        <div class="validation-message">
            {{ $errors->first('user.parliament_assemply_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.user.fields.parliament_assemply_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>