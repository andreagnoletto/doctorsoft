<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\WithCSVImport;
use App\Models\MedicalRecord;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MedicalRecordController extends Controller
{
    use WithCSVImport;

    public function __construct()
    {
        $this->csvImportModel = MedicalRecord::class;
    }

    public function index()
    {
        abort_if(Gate::denies('medical_record_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medical-record.index');
    }

    public function create()
    {
        abort_if(Gate::denies('medical_record_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medical-record.create');
    }

    public function edit(MedicalRecord $medicalRecord)
    {
        abort_if(Gate::denies('medical_record_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.medical-record.edit', compact('medicalRecord'));
    }

    public function show(MedicalRecord $medicalRecord)
    {
        abort_if(Gate::denies('medical_record_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $medicalRecord->load('patient', 'team');

        return view('admin.medical-record.show', compact('medicalRecord'));
    }
}
