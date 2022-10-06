<?php

namespace App\Http\Livewire\State;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class Create extends Component
{
    public State $state;

    public array $listsForFields = [];

    public function mount(State $state)
    {
        $this->state = $state;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.state.create');
    }

    public function submit()
    {
        $this->validate();

        $this->state->save();

        return redirect()->route('admin.states.index');
    }

    protected function rules(): array
    {
        return [
            'state.name' => [
                'string',
                'nullable',
            ],
            'state.country_id' => [
                'integer',
                'exists:countries,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['country'] = Country::pluck('name', 'id')->toArray();
    }
}
