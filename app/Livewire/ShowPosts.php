<?php

namespace App\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $name, $email, $body;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        $this->reset(['name', 'email', 'body']);

        // Tampilkan pesan sukses
        session()->flash('message', 'Terimakasih sudah mengontak kami.');
    }

    public function render()
    {
        return view('livewire.show-posts')->layout('layouts.app');
    }
}
