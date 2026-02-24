<?php

use Livewire\Component;

new class extends Component {
    public string $menu = '';
    public string $link = '';
};
?>

<div>
    <nav class="navbar flex">
        <a href="#">Fajar Septianto</a>
        <button class="navbar-button"></button>
        <div class="nav-menu">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </nav>
</div>
