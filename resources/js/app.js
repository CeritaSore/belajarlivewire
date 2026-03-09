import "flowbite";
import { initFlowbite } from "flowbite";

// Jalankan init setiap kali Livewire melakukan navigasi
document.addEventListener(() => {
    initFlowbite();

    // Mobile Menu Logic
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.onclick = () => {
            mobileMenu.classList.toggle("hidden");
        };
    }
});
