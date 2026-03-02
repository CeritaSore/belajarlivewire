import "flowbite";
import { initFlowbite } from "flowbite";

// Jalankan init setiap kali Livewire melakukan navigasi
document.addEventListener("livewire:navigated", () => {
    initFlowbite();
});
