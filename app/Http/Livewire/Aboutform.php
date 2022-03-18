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

    // private $validationRules = [
    //     1 => [
    //         'name' => ['required', 'min:3'],
    //         'lastname' => ['required', 'min:3'],
    //         'email' => ['required', 'email', 'unique:users,email'],
    //     ],
    //     2 => [
    //         'password' => ['required', 'string', 'min:8'],
    //         'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
    //     ],
    // ];
    public function goToNextPage()
    {

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
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    // }
    public function submit(Request $request)
    {
        // $rules = collect($this->validationRules)->collapse()->toArray();

        // $this->validate($rules);

        $request->user()->adresses()->create([
            'fax' =>$this->fax,
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
    }
    public function render()
    {

        return view('livewire.aboutform');
    }
}
