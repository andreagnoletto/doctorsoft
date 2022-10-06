<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use App\Models\Patient;
use Livewire\Component;

class Edit extends Component
{
    public Event $event;

    public array $listsForFields = [];

    public function mount(Event $event)
    {
        $this->event = $event;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.event.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->event->save();

        return redirect()->route('admin.events.index');
    }

    protected function rules(): array
    {
        return [
            'event.event_date' => [
                'required',
                'date_format:' . config('project.date_format'),
            ],
            'event.event_time' => [
                'required',
                'date_format:' . config('project.time_format'),
            ],
            'event.patient_id' => [
                'integer',
                'exists:patients,id',
                'required',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['patient'] = Patient::pluck('name', 'id')->toArray();
    }
}
