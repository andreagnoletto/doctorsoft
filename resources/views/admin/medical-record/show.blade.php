@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.medicalRecord.title_singular') }}:
                    {{ trans('cruds.medicalRecord.fields.id') }}
                    {{ $medicalRecord->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.medicalRecord.fields.id') }}
                            </th>
                            <td>
                                {{ $medicalRecord->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.medicalRecord.fields.record') }}
                            </th>
                            <td>
                                {{ $medicalRecord->record }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.medicalRecord.fields.patient') }}
                            </th>
                            <td>
                                @if($medicalRecord->patient)
                                    <span class="badge badge-relationship">{{ $medicalRecord->patient->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('medical_record_edit')
                    <a href="{{ route('admin.medical-records.edit', $medicalRecord) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.medical-records.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection