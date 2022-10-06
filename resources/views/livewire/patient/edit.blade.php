<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('patient.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.patient.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="patient.name">
        <div class="validation-message">
            {{ $errors->first('patient.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.email') ? 'invalid' : '' }}">
        <label class="form-label" for="email">{{ trans('cruds.patient.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" wire:model.defer="patient.email">
        <div class="validation-message">
            {{ $errors->first('patient.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.date_of_birth') ? 'invalid' : '' }}">
        <label class="form-label required" for="date_of_birth">{{ trans('cruds.patient.fields.date_of_birth') }}</label>
        <x-date-picker class="form-control" required wire:model="patient.date_of_birth" id="date_of_birth" name="date_of_birth" picker="date" />
        <div class="validation-message">
            {{ $errors->first('patient.date_of_birth') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.date_of_birth_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.cpf') ? 'invalid' : '' }}">
        <label class="form-label required" for="cpf">{{ trans('cruds.patient.fields.cpf') }}</label>
        <input class="form-control" type="text" name="cpf" id="cpf" required wire:model.defer="patient.cpf">
        <div class="validation-message">
            {{ $errors->first('patient.cpf') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.cpf_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.rg') ? 'invalid' : '' }}">
        <label class="form-label" for="rg">{{ trans('cruds.patient.fields.rg') }}</label>
        <input class="form-control" type="text" name="rg" id="rg" wire:model.defer="patient.rg">
        <div class="validation-message">
            {{ $errors->first('patient.rg') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.rg_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.mobile') ? 'invalid' : '' }}">
        <label class="form-label" for="mobile">{{ trans('cruds.patient.fields.mobile') }}</label>
        <input class="form-control" type="text" name="mobile" id="mobile" wire:model.defer="patient.mobile">
        <div class="validation-message">
            {{ $errors->first('patient.mobile') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.mobile_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.phone_2') ? 'invalid' : '' }}">
        <label class="form-label" for="phone_2">{{ trans('cruds.patient.fields.phone_2') }}</label>
        <input class="form-control" type="text" name="phone_2" id="phone_2" wire:model.defer="patient.phone_2">
        <div class="validation-message">
            {{ $errors->first('patient.phone_2') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.phone_2_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.address') ? 'invalid' : '' }}">
        <label class="form-label" for="address">{{ trans('cruds.patient.fields.address') }}</label>
        <input class="form-control" type="text" name="address" id="address" wire:model.defer="patient.address">
        <div class="validation-message">
            {{ $errors->first('patient.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.address_number') ? 'invalid' : '' }}">
        <label class="form-label" for="address_number">{{ trans('cruds.patient.fields.address_number') }}</label>
        <input class="form-control" type="text" name="address_number" id="address_number" wire:model.defer="patient.address_number">
        <div class="validation-message">
            {{ $errors->first('patient.address_number') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.address_number_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.zip_code') ? 'invalid' : '' }}">
        <label class="form-label" for="zip_code">{{ trans('cruds.patient.fields.zip_code') }}</label>
        <input class="form-control" type="text" name="zip_code" id="zip_code" wire:model.defer="patient.zip_code">
        <div class="validation-message">
            {{ $errors->first('patient.zip_code') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.zip_code_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.city') ? 'invalid' : '' }}">
        <label class="form-label" for="city">{{ trans('cruds.patient.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" wire:model.defer="patient.city">
        <div class="validation-message">
            {{ $errors->first('patient.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.state') ? 'invalid' : '' }}">
        <label class="form-label" for="state">{{ trans('cruds.patient.fields.state') }}</label>
        <input class="form-control" type="text" name="state" id="state" wire:model.defer="patient.state">
        <div class="validation-message">
            {{ $errors->first('patient.state') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.state_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('patient.country') ? 'invalid' : '' }}">
        <label class="form-label" for="country">{{ trans('cruds.patient.fields.country') }}</label>
        <input class="form-control" type="text" name="country" id="country" wire:model.defer="patient.country">
        <div class="validation-message">
            {{ $errors->first('patient.country') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.patient.fields.country_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.patients.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>