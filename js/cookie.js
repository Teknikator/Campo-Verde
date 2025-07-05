// Hilfsfunktionen zum Setzen und Lesen von Cookies (aus Ihrer alten cookie.js)
const setCookie = (cName, cValue, expDays) => {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
};

const getCookie = (cName) => {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split("; ");
    let value = null; // Initialisiere mit null, falls Cookie nicht gefunden wird
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) {
            value = val.substring(name.length);
        }
    });
    return value;
};


// Hauptlogik für den Cookie-Banner
document.addEventListener('DOMContentLoaded', () => {
    const cookieBanner = document.getElementById('cookies');
    const acceptButton = document.getElementById('cookies-btn');

    // 1. Prüfen, ob der Cookie bereits gesetzt ist
    const consentCookie = getCookie("website_consent");

    if (!consentCookie || consentCookie !== "accepted") {
        // Wenn der Cookie NICHT gesetzt oder NICHT 'accepted' ist, zeige den Banner an
        if (cookieBanner) { // Stelle sicher, dass das Element existiert
            cookieBanner.style.display = 'block';
        }
    } else {
        // Wenn der Cookie gesetzt und 'accepted' ist, verstecke den Banner
        if (cookieBanner) {
            cookieBanner.style.display = 'none';
        }
    }

    // 2. Event-Listener für den "Akzeptieren"-Button hinzufügen
    if (acceptButton) { // Stelle sicher, dass der Button existiert
        acceptButton.addEventListener('click', () => {
            setCookie("website_consent", "accepted", 30); // Cookie für 30 Tage setzen
            if (cookieBanner) {
                cookieBanner.style.display = 'none'; // Banner ausblenden
            }
        });
    }
});