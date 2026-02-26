<?php

use Livewire\Component;

new class extends Component {
    //
    public $navbarBrand = 'Fajar Septianto';
    public $navmenu = [['url' => '#', 'names' => 'Home'], ['url' => '#about', 'names' => 'About'], ['url' => '#contact', 'names' => 'Contact']];
    public $title = 'Hai, Aku Fajar Septianto';
    public $describtion = 'Web Developer | Linux Enthusiast | Game Enjoyer';
    public $imagesPath = '/profilepicture.png';
    public $imageAlt = 'profile picture';
};
?>

<div>
    <livewire:navbar :title="$navbarBrand" :navmenu="$navmenu"></livewire:navbar>
    <livewire:jumbotron :title="$title" :message="$describtion" :imagesPath="$imagesPath" :imageAlt="$imageAlt"></livewire:jumbotron>
    <livewire:minijumbotron></livewire:minijumbotron>
    <livewire:about></livewire:about>
    <livewire:blog></livewire:blog>
    <livewire:contact></livewire:contact>
    <livewire:footer></livewire:footer>
</div>
