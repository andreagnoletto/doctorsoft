<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('city.city') ? 'invalid' : '' }}">
        <label class="form-label" for="city">{{ trans('cruds.city.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" wire:model.defer="city.city">
        <div class="validation-message">
            {{ $errors->first('city.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.city.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('city.state_id') ? 'invalid' : '' }}">
        <label class="form-label" for="state">{{ trans('cruds.city.fields.state') }}</label>
        <x-select-list class="form-control" id="state" name="state" :options="$this->listsForFields['state']" wire:model="city.state_id" />
        <div class="validation-message">
            {{ $errors->first('city.state_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.city.fields.state_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.cities.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>