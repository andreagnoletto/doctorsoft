<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicalRecordRequest;
use App\Http\Requests\UpdateMedicalRecordRequest;
use App\Http\Resources\Admin\MedicalRecordResource;
use App\Models\MedicalRecord;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MedicalRecordApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('medical_record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MedicalRecordResource(MedicalRecord::with(['patient', 'team'])->get());
    }

    public function store(StoreMedicalRecordRequest $request)
    {
        $medicalRecord = MedicalRecord::create($request->validated());

        return (new MedicalRecordResource($medicalRecord))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MedicalRecord $medicalRecord)
    {
        abort_if(Gate::denies('medical_record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MedicalRecordResource($medicalRecord->load(['patient', 'team']));
    }

    public function update(UpdateMedicalRecordRequest $request, MedicalRecord $medicalRecord)
    {
        $medicalRecord->update($request->validated());

        return (new MedicalRecordResource($medicalRecord))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MedicalRecord $medicalRecord)
    {
        abort_if(Gate::denies('medical_record_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medicalRecord->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
