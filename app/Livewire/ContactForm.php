<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{   
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string|min:10',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        // Send email logic (replace with your logic)
        /*Mail::send([], [], function ($mail) use ($validatedData) {
            $mail->to('your-email@example.com')
                ->subject('New Contact Form Submission')
                ->setBody(
                    '<p><strong>Name:</strong> ' . $validatedData['name'] . '</p>' .
                    '<p><strong>Email:</strong> ' . $validatedData['email'] . '</p>' .
                    '<p><strong>Message:</strong> ' . $validatedData['message'] . '</p>',
                    'text/html'
                );
        });*/

        // Reset form fields
        $this->reset();

        // Success message
        session()->flash('message', 'Thank you for contacting us!');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
