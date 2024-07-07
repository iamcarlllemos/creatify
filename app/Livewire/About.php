<?php

namespace App\Livewire;

use App\Models\PersonalInformation;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Validate;

class About extends Component
{

    #[Validate('required')]
    public $firstname = '';

    #[Validate('required')]
    public $middlename = '';

    #[Validate('required')]
    public $lastname = '';

    #[Validate('required')]
    public $address = '';

    #[Validate('required')]
    public $phone_no = '';

    // #[Validate('required')]
    public $gender = '';

    #[Validate('required')]
    public $birthday = '';

    public $city = '';

    public $province = '';

    public function mount() {
        $id = 1;
        $record = PersonalInformation::where('user_id', $id)->first();
        $this->firstname = $record->firstname;
        $this->middlename = $record->middlename;
        $this->lastname = $record->lastname;
        $this->address = $record->address;
        $this->phone_no = $record->phone_no;
        $this->gender = $record->gender;
        $this->birthday = $record->birthday;
        $this->city = $record->city;
        $this->province = $record->province;
    }

    public function create() {
        $validated = $this->validate();

        $id = 1;
        $validated['user_id'] = $id;

        $record = PersonalInformation::where('user_id', $id);
        if($record->exists()) {
            $record->update($validated);
        } else {
            PersonalInformation::create($validated);
        }

    }

    public function render()
    {
        return view('livewire.about');
    }
}
