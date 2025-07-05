document.addEventListener('DOMContentLoaded', () => {
    const mainContent = document.querySelector('.inhalt');

    if (mainContent) {
        const observerOptions = {
            root: null, // Der Viewport ist der Root
            rootMargin: '0px',
            threshold: 0.1 // Wenn 10% des Elements sichtbar sind
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target); // Beobachtung stoppen, nachdem es animiert wurde
                }
            });
        }, observerOptions);

        observer.observe(mainContent);
    }
});