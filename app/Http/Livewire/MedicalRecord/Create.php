<?php

namespace App\Http\Livewire\MedicalRecord;

use App\Models\MedicalRecord;
use App\Models\Patient;
use Livewire\Component;

class Create extends Component
{
    public array $listsForFields = [];

    public MedicalRecord $medicalRecord;

    public function mount(MedicalRecord $medicalRecord)
    {
        $this->medicalRecord = $medicalRecord;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.medical-record.create');
    }

    public function submit()
    {
        $this->validate();

        $this->medicalRecord->save();

        return redirect()->route('admin.medical-records.index');
    }

    protected function rules(): array
    {
        return [
            'medicalRecord.record' => [
                'string',
                'nullable',
            ],
            'medicalRecord.patient_id' => [
                'integer',
                'exists:patients,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['patient'] = Patient::pluck('name', 'id')->toArray();
    }
}
