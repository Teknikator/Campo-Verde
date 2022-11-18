

//Create logo + class: logo + id: logo

div = document.getElementById('navleiste');
navleiste = document.createElement('logo');
div.appendChild(navleiste);

navleiste.setAttribute('class', 'logo')
navleiste.setAttribute('id', 'logo');


//Create logolink a + id: linklogo

div = document.getElementById('logo');
logo = document.createElement('a');
div.appendChild(logo);

logo.setAttribute('href', '/Campo-Verde/index.html');
logo.setAttribute('id', 'linklogo');


//Create logo Img

div = document.getElementById('linklogo');
linklogo = document.createElement('img');
div.appendChild(linklogo);

linklogo.setAttribute('src', '/Campo-Verde/Bilder/Campo Verde logo.png');


//Create navigation + class: navigation + id: navigation

div = document.getElementById('navleiste');
navleiste = document.createElement('navigation');
div.appendChild(navleiste);

navleiste.setAttribute('class', 'navigation')
navleiste.setAttribute('id', 'navigation');


//Create div + class: navigations-inhalt + id: navinhalt

div = document.getElementById('navigation');
navigation = document.createElement('div');
div.appendChild(navigation);

navigation.setAttribute('class', 'navigations-inhalt')
navigation.setAttribute('id', 'navinhalt');



//Verfügbare Links in der Nav leiste

//Create a + href + id: nava1

div = document.getElementById('navinhalt');
navinhalt = document.createElement('a');
div.appendChild(navinhalt);

navinhalt.setAttribute('href', '/Campo-Verde/Unterseiten/Angebote/angebote.html');
navinhalt.setAttribute('class', 'angebote')
navinhalt.setAttribute('id', 'nava1');

navA1 = document.getElementById('nava1');
navA1.appendChild(document.createTextNode('Angebote'));



//Create a + href + id: nava2

div = document.getElementById('navinhalt');
navinhalt = document.createElement('a');
div.appendChild(navinhalt);

navinhalt.setAttribute('href', '/Campo-Verde/Unterseiten/Über uns/über-uns.html');
navinhalt.setAttribute('class','über uns')
navinhalt.setAttribute('id', 'nava2');

navA1 = document.getElementById('nava2');
navA1.appendChild(document.createTextNode('Über Uns'));



//Create a + href + id: nava3

div = document.getElementById('navinhalt');
navinhalt = document.createElement('a');
div.appendChild(navinhalt);

navinhalt.setAttribute('href', '/Campo-Verde/Unterseiten/Anfahrt/anfahrt.html');
navinhalt.setAttribute('class', 'anfahrt')
navinhalt.setAttribute('id', 'nava3');

navA1 = document.getElementById('nava3');
navA1.appendChild(document.createTextNode('Anfahrt'));