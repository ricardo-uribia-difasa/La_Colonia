<?php

namespace App\Livewire\Dashboard\Users\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UpdateForm extends Form
{
    public ?User $user;

    public $name = '';

    public $email = '';

    public $password = '';

    public $deleted_at = '';

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => [
                'required',
                'string',
                Rule::unique('users', 'email')->ignore($this->user),
            ],
            'password' => ['nullable', 'string', 'min:6'],
            'deleted_at' => ['nullable', 'date'],
        ];
    }

    public function setUser(User $user)
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->deleted_at = $user->deleted_at;
    }

    public function save()
    {
        $this->validate();

        $this->password = Hash::make($this->password);

        $this->user->update($this->except(['user']));
    }
}
