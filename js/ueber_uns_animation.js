document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null, // Der Viewport ist der Root
        rootMargin: '0px',
        threshold: 0.1 // Wenn 10% des Elements sichtbar sind
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                observer.unobserve(entry.target); // Stoppe die Beobachtung, nachdem es animiert wurde
            }
        });
    }, observerOptions);

    // Beobachte alle <person>-Elemente
    document.querySelectorAll('person').forEach(person => {
        observer.observe(person);
    });
});