document.addEventListener('DOMContentLoaded', () => {
    // Wählen Sie alle Versionseinträge aus
    const versionEntries = document.querySelectorAll('.version-entry');

    versionEntries.forEach(entry => {
        const header = entry.querySelector('.version-header');
        const details = entry.querySelector('.version-details');
        const toggleIcon = header.querySelector('.toggle-icon'); // Das Plus/Minus-Icon

        if (header && details && toggleIcon) {
            header.addEventListener('click', (e) => {
                e.preventDefault(); // Verhindert das Standardverhalten des Links

                // Überprüfen, ob der aktuelle Eintrag bereits aktiv ist
                const isActive = entry.classList.contains('active');

                // Alle anderen offenen Versionen schließen
                document.querySelectorAll('.version-entry.active').forEach(openEntry => {
                    if (openEntry !== entry) { // Schließt nur andere Einträge
                        openEntry.classList.remove('active');
                    }
                });

                // Den geklickten Eintrag umschalten
                if (isActive) {
                    entry.classList.remove('active');
                } else {
                    entry.classList.add('active');
                }
            });
        }
    });

    // Optional: Animation für den Haupt-Inhaltsbereich beim Laden der Seite
    const mainContentWrapper = document.querySelector('#version-page-main');
    if (mainContentWrapper) {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        observer.observe(mainContentWrapper);
    }
});