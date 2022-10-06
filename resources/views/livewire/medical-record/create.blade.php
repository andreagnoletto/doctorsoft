<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('medicalRecord.record') ? 'invalid' : '' }}">
        <label class="form-label" for="record">{{ trans('cruds.medicalRecord.fields.record') }}</label>
        <textarea class="form-control" name="record" id="record" wire:model.defer="medicalRecord.record" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('medicalRecord.record') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medicalRecord.fields.record_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('medicalRecord.patient_id') ? 'invalid' : '' }}">
        <label class="form-label" for="patient">{{ trans('cruds.medicalRecord.fields.patient') }}</label>
        <x-select-list class="form-control" id="patient" name="patient" :options="$this->listsForFields['patient']" wire:model="medicalRecord.patient_id" />
        <div class="validation-message">
            {{ $errors->first('medicalRecord.patient_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.medicalRecord.fields.patient_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.medical-records.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>