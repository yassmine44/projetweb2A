document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'title,prev,next',
            right: 'today',
            center: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        selectable: true,
        selectMirror: true,
        select: function(arg) {
            var title = prompt('Event Title:');
            if (title) {
                var eventData = {
                    title: title,
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                };
                addEventToDatabase(eventData);
            }
            calendar.unselect()
        },
        editable: true,
        droppable: true,
        drop: function(arg) {
            if (document.getElementById('drop-remove').checked) {
                arg.draggedEl.parentNode.removeChild(arg.draggedEl);
            }
        },
        initialDate: '2024-01-01',
        weekNumbers: true,
        navLinks: true,
        editable: true,
        selectable: true,
        nowIndicator: true,
        events: {
            url: 'C:/xampp/htdocs/gestionentretien/view/back/calendar-page.php', // URL pour récupérer les événements depuis la base de données
            method: 'GET',
            failure: function() {
                alert('Erreur lors du chargement des événements depuis la base de données');
            }
        }

        }
    );
    calendar.render();

    // Fonction pour ajouter un nouvel événement à la base de données
    function addEventToDatabase(event) {
        // Vous pouvez implémenter ici la logique pour ajouter l'événement à votre base de données si nécessaire
        // Après avoir ajouté avec succès l'événement dans la base de données, rafraîchissez les événements du calendrier
        // Ici, je simule un ajout réussi et une mise à jour des événements du calendrier
        // Vous devez remplacer cette partie par votre propre logique
        
        // Récupérer la date de rendez-vous de l'événement
        var daterdv = event.start;
    
        // Ajouter l'événement au calendrier
        calendar.addEvent({
            title: event.title,
            start: event.start,
            end: event.end,
            allDay: event.allDay
        });
    
        // Rafraîchir les événements du calendrier
        refreshEvents();
    }
    
    // Fonction pour rafraîchir les événements du calendrier
    function refreshEvents() {
        calendar.refetchEvents();
    }
});
