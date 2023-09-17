document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.querySelector('.reservation_date');
    const slotInput = document.querySelector('.reservation_slot');
    const availableGuestsCount = document.getElementById('available-guests-count');

    // Ajoutez un gestionnaire d'événements pour le champ slot
    slotInput.addEventListener('change', updateAvailableGuests);
    dateInput.addEventListener('change', updateAvailableGuests);


    function updateAvailableGuests() {
        const selectedDate = dateInput.value;
        const selectedSlot = slotInput.value;

        // Vérifiez si slot est défini avant d'effectuer la requête AJAX
        if (selectedSlot) {
            fetch(`get-available-guests?date=${selectedDate}&slot=${selectedSlot}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Données reçues :', data);

                    if (data >= 0) {
                        availableGuestsCount.textContent = 20 - data;
                    } else {
                        availableGuestsCount.textContent = '0';
                    }
                })
                .catch(error => {
                    console.error('Une erreur s\'est produite lors de la récupération du nombre de convives disponibles :', error);
                });
        } else {
            // Le champ slot n'est pas défini, gérer le cas ici
        }
    }

    // Appel initial pour afficher le nombre de convives disponibles au chargement de la page
    updateAvailableGuests();
});
