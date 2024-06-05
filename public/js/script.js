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
