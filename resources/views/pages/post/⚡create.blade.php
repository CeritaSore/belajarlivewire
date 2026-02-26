<?php

use Livewire\Component;

new class extends Component {
    public $name = '';
    public $email = '';
    public $password = '';
    public function save()
    {
        dd($this->all('input'));
    }
};
?>

<div>
    <form wire:submit="save">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" wire:model="name" />
        </div>
        <div class="form-group">
            <label for="name">email</label>
            <input type="email" wire:model="email" />
        </div>
        <div class="form-group">
            <label for="name">password</label>
            <input type="password" wire:model="password" />
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
