<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Inquiry;

class ContactFormComponent extends Component
{
    public $first_name, $last_name, $email, $phone, $subject, $message;
    public $success = false;

    protected $rules = [
        'first_name' => 'required|min:2',
        'last_name'  => 'required|min:2',
        'email'      => 'required|email',
        'phone'      => 'required',
        'message'    => 'required|min:5',
    ];

    public function submit()
    {
        $this->validate();

        Inquiry::create([
            'first_name' => $this->first_name,
            'last_name'  => $this->last_name,
            'email'      => $this->email,
            'phone'      => $this->phone,
            'subject'    => $this->subject,
            'message'    => $this->message,
        ]);

        $this->reset();
        $this->success = true;
    }

    public function render()
    {
        return view('livewire.contact-form-component');
    }
}
