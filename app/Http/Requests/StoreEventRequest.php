<?php

namespace App\Http\Requests;

use App\Models\Event;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(
            Gate::denies('event_create'),
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
            'event_date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'event_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
            'patient_id' => [
                'integer',
                'exists:patients,id',
                'required',
            ],
        ];
    }
}
