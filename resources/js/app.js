import Aos from 'aos';
import './bootstrap';
import 'preline';
import 'atropos/css';
import Dropzone from "dropzone";
import Toastify from 'toastify-js'
import { HSDataTable } from 'preline';
import Atropos from 'atropos';
import 'datatables.net-buttons/js/dataTables.buttons.min.js';
import 'jszip/dist/jszip.min.js';
import 'pdfmake/build/pdfmake.min.js';
import 'pdfmake/build/vfs_fonts.js';
import 'datatables.net-buttons/js/buttons.html5.min.js';
import 'datatables.net-buttons/js/buttons.print.min.js';


// Initialize
const myAtropos = Atropos({
  el: '.my-atropos',
  
  // rest of parameters
});

/* 
* Initialize AOS
*/
Aos.init();



window.addEventListener('load', () => {
      
    const inputs = document.querySelectorAll('.dt-container thead input');
  
    inputs.forEach((input) => {
      input.addEventListener('keydown', function (evt) {
        if ((evt.metaKey || evt.ctrlKey) && evt.key === 'a') this.select();
      });
    });
  })


  
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

    /* 
    * End
    */
});
