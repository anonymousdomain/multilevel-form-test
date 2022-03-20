<?php

namespace App\Http\Livewire;

use App\Models\Address;
use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;

class Aboutform extends Component
{
    public $currentPage = 1;
    public $success;

    public $name;
    public $lastname;
    public $email;
    public $username;
    public $phone;
    public $fax;
    public $usersex;
    public $Mstatus;
    public $fullname;
    public $rel;
    public $relphone;
    public $natinality;
    public $region;
    public $sub_city;
    public $house_no;

    public $pages = [
        1 => [
            'heading' => 'Personal Information',
            'subheading' => 'Let\'s start with the basic information.',
        ],
        2 => [
            'heading' => 'Emergency Contact',
            'subheading' => 'Enter emergencey contact.',
        ],
        3 => [
            'heading' => 'Address',
            'subheading' => 'Enter Your address.',
        ],
    ];

    private $validationRules = [
        1 => [
            'name' => ['required', 'min:3', 'max:25'],
            'lastname' => ['required', 'min:3', 'max:25'],
            'username' => ['required', 'min:3', 'max:25'],
            'phone' => ['required', 'min:10', 'max:14'],
            'email' => ['required', 'email', 'unique:users,email'],
        ],
        2 => [
            'fullname' => ['required', 'string', 'min:3', 'max:25'],
            'rel' => ['required', 'string', 'min:4', 'max:20'],
            'relphone' => ['required', 'min:10', 'max:14'],
        ],
        3 => [
            'natinality' => ['required', 'string', 'min:3', 'max:25'],
            'region' => ['required', 'string', 'min:4', 'max:20'],
            'sub_city' => ['required', 'min:3', 'max:25'],
            'house_no' => ['required', 'unique:addresses,house_no'],
        ],
    ];
    public function goToNextPage()
    {

        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }
    public function submit(Request $request)
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        $request->user()->adresses()->create([
            'fax' => $this->fax,
            'Mstatus' => $this->Mstatus,
            'fullname' => $this->fullname,
            'rel' => $this->rel,
            'relphone' => $this->relphone,
            'natinality' => $this->natinality,
            'region' => $this->region,
            'sub_city' => $this->sub_city,
            'house_no' => $this->house_no,
        ]);

        $this->reset();
        // $this->resetValidation();

        $this->success = 'User created successfully!';

        return redirect()->route('table');
    }
    public function render()
    {

        return view('livewire.aboutform');
    }
}
