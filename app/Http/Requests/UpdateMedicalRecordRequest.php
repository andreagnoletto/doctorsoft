<?php

namespace App\Http\Requests;

use App\Models\MedicalRecord;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMedicalRecordRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('medical_record_edit'),
            response()->json(
                ['message' => 'This action is unauthorized.'],
                Response::HTTP_FORBIDDEN
            ),
        );

        return true;
    }

    public function rules(): array
    {
        return [
            'record' => [
                'string',
                'nullable',
            ],
            'patient_id' => [
                'integer',
                'exists:patients,id',
                'nullable',
            ],
        ];
    }
}
