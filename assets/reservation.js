document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.querySelector('.reservation_date');
    const slotInput = document.querySelector('.reservation_slot');
    // slotInput.value renvoie que le id
    const tableSelect = document.getElementById('reservation_table');

    dateInput.addEventListener('change', updateAvailableTables);
    slotInput.addEventListener('change', updateAvailableTables);

    //Je mets à jour la liste des tables 
    function updateAvailableTables() {
        const selectedDate = dateInput.value;
        const selectedSlot = slotInput.value;

        // J'envoie une requête à la route get-availables tables en donnant en paramètre la date et l'horaire sélectionnés
        fetch(`get-available-tables?date=${selectedDate}&slot=${selectedSlot}`)
            .then(response => response.json())
            .then(data => {
                // Mettre à jour les options du champ de sélection des tables
                tableSelect.innerHTML = '';
                if (data.tables.length > 0) {
                    data.tables.forEach(table => {
                        const option = document.createElement('option');
                        option.value = table.id;
                        option.textContent = `Table Quai n° ${table.id} de ${table.numberOfSettings} personnes `;

                        tableSelect.appendChild(option);
                    });
                } else {
                    const option = document.createElement('option');
                    option.textContent = 'Aucune table disponible pour cette date et heure.';
                    tableSelect.appendChild(option);
                }
            })
            .catch(error => {
                console.error('Une erreur s\'est produite lors de la récupération des tables disponibles :', error);
            });
    }

    // Appel initial pour afficher les tables disponibles au chargement de la page
    updateAvailableTables();
});
