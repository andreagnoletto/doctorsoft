<?php

namespace App\Http\Requests;

use App\Models\Patient;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePatientRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('patient_create'),
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
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'email:rfc',
                'nullable',
            ],
            'date_of_birth' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'cpf' => [
                'string',
                'required',
            ],
            'rg' => [
                'string',
                'nullable',
            ],
            'mobile' => [
                'string',
                'nullable',
            ],
            'phone_2' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'address_number' => [
                'string',
                'nullable',
            ],
            'zip_code' => [
                'string',
                'nullable',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'state' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
        ];
    }
}
