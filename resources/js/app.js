import Aos from 'aos';
import './bootstrap';
import 'preline';

/* 
* Initialize AOS
*/
Aos.init();

document.addEventListener('livewire:navigate', () => {
    Aos.refresh();
    setTimeout(() => {
        /* 
        * Initialize preline.co when the page is loaded with Livewire
        */
        window.HSStaticMethods.autoInit();
        /* 
        * End
        */

        /* 
        * Determine how many slide-up modals are on the page and append them to the body
        */
        for(let i = 0; i < 10; i++) {
            var modal = document.getElementById('hs-slide-up-animation-' + i);
            if(modal){
                document.body.appendChild(modal);
            }
        }
        /* 
        * End
        */

        /* 
        * Insert the Leaflet map when the page is loaded with Livewire
        */
        var map = L.map('leaflet-map').setView([19.00016,-98.20364], 17);
        if(map) {
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
        
            L.marker([19.00016,-98.20364]).addTo(map)
                .bindPopup('Arena BUAP ')
                .openPopup();
        }
        /* 
        * End
        */


    }, 3000);
})

document.addEventListener("DOMContentLoaded", function() {
    /* 
    * Determine how many slide-up modals are on the page and append them to the body
    */
    for(let i = 0; i < 10; i++) {
        var modal = document.getElementById('hs-slide-up-animation-' + i);
        if(modal){
            document.body.appendChild(modal);
        }
    }
    /* 
    * End 
    */

    /* 
    * Insert the Leaflet map
    */
    let map = L.map('leaflet-map').setView([19.00016,-98.20364], 17);
    if(map) {
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    
        L.marker([19.00016,-98.20364]).addTo(map)
            .bindPopup('Arena BUAP ')
            .openPopup();
    }
    /* 
    * End
    */
});