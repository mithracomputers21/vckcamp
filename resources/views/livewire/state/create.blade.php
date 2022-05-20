<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('state.state_name') ? 'invalid' : '' }}">
        <label class="form-label required" for="state_name">{{ trans('cruds.state.fields.state_name') }}</label>
        <input class="form-control" type="text" name="state_name" id="state_name" required wire:model.defer="state.state_name">
        <div class="validation-message">
            {{ $errors->first('state.state_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.state.fields.state_name_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.states.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>