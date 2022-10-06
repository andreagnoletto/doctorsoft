@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.patient.title_singular') }}:
                    {{ trans('cruds.patient.fields.id') }}
                    {{ $patient->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.id') }}
                            </th>
                            <td>
                                {{ $patient->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.name') }}
                            </th>
                            <td>
                                {{ $patient->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $patient->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $patient->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.date_of_birth') }}
                            </th>
                            <td>
                                {{ $patient->date_of_birth }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.cpf') }}
                            </th>
                            <td>
                                {{ $patient->cpf }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.rg') }}
                            </th>
                            <td>
                                {{ $patient->rg }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.mobile') }}
                            </th>
                            <td>
                                {{ $patient->mobile }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.phone_2') }}
                            </th>
                            <td>
                                {{ $patient->phone_2 }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.address') }}
                            </th>
                            <td>
                                {{ $patient->address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.address_number') }}
                            </th>
                            <td>
                                {{ $patient->address_number }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.zip_code') }}
                            </th>
                            <td>
                                {{ $patient->zip_code }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.city') }}
                            </th>
                            <td>
                                {{ $patient->city }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.state') }}
                            </th>
                            <td>
                                {{ $patient->state }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.patient.fields.country') }}
                            </th>
                            <td>
                                {{ $patient->country }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('patient_edit')
                    <a href="{{ route('admin.patients.edit', $patient) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.patients.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection