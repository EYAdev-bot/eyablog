// Fonction pour prévisualiser l'image principale
        function previewMainImage(input) {
            const preview = document.getElementById('mainPhotoPreview');
            const uploadContainer = input.parentElement.querySelector('.main-photo-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    uploadContainer.classList.add('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
