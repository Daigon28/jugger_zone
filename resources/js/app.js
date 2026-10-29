import './bootstrap';



    import { createIcons, icons } from 'lucide';

    createIcons({ icons });



    const header = document.getElementById('main-header');

    function updateHeader() {
        header.classList.toggle('scrolled', window.scrollY > 50);
    }

    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();