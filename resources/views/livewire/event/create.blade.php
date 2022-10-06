<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('event.event_date') ? 'invalid' : '' }}">
        <label class="form-label required" for="event_date">{{ trans('cruds.event.fields.event_date') }}</label>
        <x-date-picker class="form-control" required wire:model="event.event_date" id="event_date" name="event_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('event.event_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.event.fields.event_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('event.event_time') ? 'invalid' : '' }}">
        <label class="form-label required" for="event_time">{{ trans('cruds.event.fields.event_time') }}</label>
        <x-date-picker class="form-control" required wire:model="event.event_time" id="event_time" name="event_time" picker="time" />
        <div class="validation-message">
            {{ $errors->first('event.event_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.event.fields.event_time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('event.patient_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="patient">{{ trans('cruds.event.fields.patient') }}</label>
        <x-select-list class="form-control" required id="patient" name="patient" :options="$this->listsForFields['patient']" wire:model="event.patient_id" />
        <div class="validation-message">
            {{ $errors->first('event.patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.event.fields.patient_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>