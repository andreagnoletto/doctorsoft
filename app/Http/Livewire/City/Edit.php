<?php

namespace App\Http\Livewire\City;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class Edit extends Component
{
    public City $city;

    public array $listsForFields = [];

    public function mount(City $city)
    {
        $this->city = $city;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.city.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->city->save();

        return redirect()->route('admin.cities.index');
    }

    protected function rules(): array
    {
        return [
            'city.city' => [
                'string',
                'nullable',
            ],
            'city.state_id' => [
                'integer',
                'exists:states,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['state'] = State::pluck('name', 'id')->toArray();
    }
}
