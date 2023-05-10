

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

logo.setAttribute('href', '/index.html');
logo.setAttribute('id', 'linklogo');


//Create logo Img

div = document.getElementById('linklogo');
linklogo = document.createElement('img');
div.appendChild(linklogo);

linklogo.setAttribute('src', '/Bilder/Campo Verde logo.png');



//Create input + typ: checkbox + id: toggle_button

div = document.getElementById('navleiste');
navleiste = document.createElement('input');
div.appendChild(navleiste);

navleiste.setAttribute('type', 'checkbox')
navleiste.setAttribute('id', 'toggle_button');


//Create label + for: toggle_button + class: toggle_button + id: burgermenu

div = document.getElementById('navleiste');
navleiste = document.createElement('label');
div.appendChild(navleiste);

navleiste.setAttribute('for', 'toggle_button')
navleiste.setAttribute('class', 'toggle_button');
navleiste.setAttribute('id', 'burgermenu');


//Create span + class: bar

div = document.getElementById('burgermenu');
burgermenu = document.createElement('span');
div.appendChild(burgermenu);

burgermenu.setAttribute('class', 'bar');


//Create span + class: bar

div = document.getElementById('burgermenu');
burgermenu = document.createElement('span');
div.appendChild(burgermenu);

burgermenu.setAttribute('class', 'bar');


//Create span + class: bar

div = document.getElementById('burgermenu');
burgermenu = document.createElement('span');
div.appendChild(burgermenu);

burgermenu.setAttribute('class', 'bar');


//Create ul + id: navul

div = document.getElementById('navleiste');
navleiste = document.createElement('ul');
div.appendChild(navleiste);

navleiste.setAttribute('id', 'navul');


//Create li + id: navli1

div = document.getElementById('navul');
navul = document.createElement('li');
div.appendChild(navul);

navul.setAttribute('id', 'navli1');


//Create a + id: nava1 + href: /Unterseiten/Über uns/über-uns.html + textnode: Über uns

div = document.getElementById('navli1');
navli1 = document.createElement('a');
div.appendChild(navli1);

navli1.setAttribute('href', '/Unterseiten/Über uns/über-uns.html');
navli1.setAttribute('id', 'nava1');

nava1 = document.getElementById('nava1');
nava1.appendChild(document.createTextNode('Über Uns'));


//Create li + id: navli2

div = document.getElementById('navul');
navul = document.createElement('li');
div.appendChild(navul);

navul.setAttribute('class', 'expandable_li');
navul.setAttribute('id', 'navli2');


//Create input + typ: checkbox + id: products_checkbox

div = document.getElementById('navli2');
navli2 = document.createElement('input');
div.appendChild(navli2);

navli2.setAttribute('type', 'checkbox')
navli2.setAttribute('id', 'products_checkbox');


//Create label + for: products_checkbox + id: dropdownlabel

div = document.getElementById('navli2');
navli2 = document.createElement('label');
div.appendChild(navli2);

navli2.setAttribute('for', 'products_checkbox')
navli2.setAttribute('id', 'dropdownlabel');

dropdownlabel = document.getElementById('dropdownlabel');
dropdownlabel.appendChild(document.createTextNode('Angebote'));


//Create ul + class: dropdown + id: dropdownul

div = document.getElementById('navli2');
navli2 = document.createElement('ul');
div.appendChild(navli2);

navli2.setAttribute('class', 'dropdown')
navli2.setAttribute('id', 'dropdownul');


//Create li + id: dropli1

div = document.getElementById('dropdownul');
dropdownul = document.createElement('li');
div.appendChild(dropdownul);

dropdownul.setAttribute('id', 'dropli1');


//Create a + href: + id: dropa1 + Textnode: Pensionsstall

div = document.getElementById('dropli1');
dropli1 = document.createElement('a');
div.appendChild(dropli1);

dropli1.setAttribute('href', '/Unterseiten/Pensionsstall/pensionsstall.html');
dropli1.setAttribute('id', 'dropa1');

dropa1 = document.getElementById('dropa1');
dropa1.appendChild(document.createTextNode('Pensionsstall'));


//Create li + id: dropli2

div = document.getElementById('dropdownul');
dropdownul = document.createElement('li');
div.appendChild(dropdownul);

dropdownul.setAttribute('id', 'dropli2');


//Create a + href: + id: dropa2 + Textnode: Therapeutisches Reiten

div = document.getElementById('dropli2');
dropli2 = document.createElement('a');
div.appendChild(dropli2);

dropli2.setAttribute('href', '/Unterseiten/Therapeutisches-Reiten/therapeutisches-reiten.html');
dropli2.setAttribute('id', 'dropa2');

dropa2 = document.getElementById('dropa2');
dropa2.appendChild(document.createTextNode('Therapeutisches Reiten'));


//Create li + id: dropli3

div = document.getElementById('dropdownul');
dropdownul = document.createElement('li');
div.appendChild(dropdownul);

dropdownul.setAttribute('id', 'dropli3');


//Create a + href: + id: dropa3 + Textnode: Reiten lernen

div = document.getElementById('dropli3');
dropli3 = document.createElement('a');
div.appendChild(dropli3);

dropli3.setAttribute('href', '/Unterseiten/Reiten-lernen/reiten-lernen.html');
dropli3.setAttribute('id', 'dropa3');

dropa3 = document.getElementById('dropa3');
dropa3.appendChild(document.createTextNode('Reiten lernen'));


//Create li + id: dropli4

div = document.getElementById('dropdownul');
dropdownul = document.createElement('li');
div.appendChild(dropdownul);

dropdownul.setAttribute('id', 'dropli4');


//Create a + href: + id: dropa4 + Textnode: Ferienprogramm

div = document.getElementById('dropli4');
dropli4 = document.createElement('a');
div.appendChild(dropli4);

dropli4.setAttribute('href', '');
dropli4.setAttribute('id', 'dropa4');

dropa4 = document.getElementById('dropa4');
dropa4.appendChild(document.createTextNode('Ferienprogramm'));


//Create li + id: dropli5

div = document.getElementById('dropdownul');
dropdownul = document.createElement('li');
div.appendChild(dropdownul);

dropdownul.setAttribute('id', 'dropli5');


//Create a + href: + id: dropa5 + Textnode: Ferienwohnung

div = document.getElementById('dropli5');
dropli5 = document.createElement('a');
div.appendChild(dropli5);

dropli5.setAttribute('href', '');
dropli5.setAttribute('id', 'dropa5');

dropa5 = document.getElementById('dropa5');
dropa5.appendChild(document.createTextNode('Ferienwohnung'));


//Create li + id: navli3

div = document.getElementById('navul');
navul = document.createElement('li');
div.appendChild(navul);

navul.setAttribute('id', 'navli3');


//Create a + id: nava3 + href: /Unterseiten/Anfahrt/anfahrt.html + textnode: Über uns

div = document.getElementById('navli3');
navli3 = document.createElement('a');
div.appendChild(navli3);

navli3.setAttribute('href', '/Unterseiten/Anfahrt/anfahrt.html');
navli3.setAttribute('id', 'nava3');

nava3 = document.getElementById('nava3');
nava3.appendChild(document.createTextNode('Anfahrt'));