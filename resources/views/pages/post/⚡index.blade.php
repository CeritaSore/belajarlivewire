<?php

use Livewire\Component;

new class extends Component {};
public $listmenu = [['url' => '/', 'names' => 'Home'], ['url' => '/about', 'names' => 'About'], ['url' => '/contact', 'names' => 'Contact']];
?>
<div>
    <livewire:navbar></livewire:navbar>
</div>
