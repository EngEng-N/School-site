document.addEventListener("DOMContentLoaded", function() {
    let gallery = document.querySelector('.gallery-lightbox');
    if (gallery) {
        lightGallery(gallery, {
            selector: 'a',
            thumbnail: true, 
            zoom: true, 
            mode: 'lg-slide',
            loop: true, // Enable looping
            speed: 500 
        });
    }
});