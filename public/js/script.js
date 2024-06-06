document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('postImages').addEventListener('change', handleFileSelect, false);

    function handleFileSelect(event) {
        const files = event.target.files;
        const slikePreview = document.getElementById('slike-preview');

        for (let i = 0; i < files.length; i++) {
            const slika = files[i];
            const slikaURL = URL.createObjectURL(slika);
            const slikaElement = document.createElement('img');
            slikaElement.src = slikaURL;
            slikaElement.className = 'img-thumbnail';
            slikaElement.alt = 'Slika';
            slikaElement.style.maxWidth = '100px';
            slikaElement.style.marginRight = '10px';
            slikePreview.appendChild(slikaElement);
        }
    }
});

// script.js

function limitCheckbox(group, clickedCheckbox) {
    var checkboxes = document.querySelectorAll('.' + group + ' .form-check-input');
    checkboxes.forEach(function (checkbox) {
        if (checkbox !== clickedCheckbox) {
            checkbox.checked = false;
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    
function switchImages() {
    var smallImages = document.querySelectorAll('[id^="smallImage"]');
    var mainImage = document.getElementById('mainImage');
    var mainImageSrc = mainImage.src;

    smallImages.forEach(function (smallImage) {
        smallImage.addEventListener('click', function () {
            var clickedImageSrc = this.src;
            mainImage.src = clickedImageSrc;
            this.src = mainImageSrc;
            mainImageSrc = mainImage.src;
            mainImage.src = mainImageSrc;
        });
    });
}

switchImages();
});




