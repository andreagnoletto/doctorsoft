<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class Create extends Component
{
    public Patient $patient;

    public function mount(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function render()
    {
        return view('livewire.patient.create');
    }

    public function submit()
    {
        $this->validate();

        $this->patient->save();

        return redirect()->route('admin.patients.index');
    }

    protected function rules(): array
    {
        return [
            'patient.name' => [
                'string',
                'required',
            ],
            'patient.email' => [
                'email:rfc',
                'nullable',
            ],
            'patient.date_of_birth' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'patient.cpf' => [
                'string',
                'required',
            ],
            'patient.rg' => [
                'string',
                'nullable',
            ],
            'patient.mobile' => [
                'string',
                'nullable',
            ],
            'patient.phone_2' => [
                'string',
                'nullable',
            ],
            'patient.address' => [
                'string',
                'nullable',
            ],
            'patient.address_number' => [
                'string',
                'nullable',
            ],
            'patient.zip_code' => [
                'string',
                'nullable',
            ],
            'patient.city' => [
                'string',
                'nullable',
            ],
            'patient.state' => [
                'string',
                'nullable',
            ],
            'patient.country' => [
                'string',
                'nullable',
            ],
        ];
    }
}
