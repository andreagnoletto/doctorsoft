<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('state.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.state.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="state.name">
        <div class="validation-message">
            {{ $errors->first('state.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.state.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('state.country_id') ? 'invalid' : '' }}">
        <label class="form-label" for="country">{{ trans('cruds.state.fields.country') }}</label>
        <x-select-list class="form-control" id="country" name="country" :options="$this->listsForFields['country']" wire:model="state.country_id" />
        <div class="validation-message">
            {{ $errors->first('state.country_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.state.fields.country_helper') }}
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