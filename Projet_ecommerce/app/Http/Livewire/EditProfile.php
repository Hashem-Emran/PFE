<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditProfile extends Component
{
    public $name;
    public $email;
    public $password;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;
        if (!empty($this->password)) {
            $user->password = bcrypt($this->password);
        }
        $user->save();

        session()->flash('success', 'Your profile has been updated.');
    }

    public function render()
    {
        return view('livewire.edit_profile');
    }
}
