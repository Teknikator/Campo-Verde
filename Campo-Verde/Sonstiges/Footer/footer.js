

//Create Element footer + id: footer

div = document.getElementById('bottom');
bottom = document.createElement('footer');
div.appendChild(bottom);

bottom.setAttribute('id', 'footer');


//Create Element inhalt-footer + id: inhaltfooter

div = document.getElementById('footer');
footer = document.createElement('inhalt-footer');
div.appendChild(footer);

footer.setAttribute('id', 'inhaltfooter');


//Create Element inhalt + class: inhalt-bottom + id: inhaltbottom

div = document.getElementById('inhaltfooter');
inhaltfooter = document.createElement('inhalt');
div.appendChild(inhaltfooter);

inhaltfooter.setAttribute('class', 'inhalt-bottom');
inhaltfooter.setAttribute('id', 'inhaltbottom');



















//Create Element Kontakt-footer + id: kontakt

div = document.getElementById('inhaltbottom');
inhaltbottom = document.createElement('Kontakt-footer');
div.appendChild(inhaltbottom);

inhaltbottom.setAttribute('id', 'kontaktfooter');


//Create Element h3 + id: überschrift2 + TextNode

div = document.getElementById('kontaktfooter');
kontaktfooter = document.createElement('h3');
div.appendChild(kontaktfooter);

kontaktfooter.setAttribute('id', 'überschrift2');

ü2 = document.getElementById('überschrift2');
ü2.appendChild(document.createTextNode('Kontakt'));




//Create Element E-Mail-footer + id: EMail

div = document.getElementById('kontaktfooter');
kontaktfooter = document.createElement('E-Mail-footer');
div.appendChild(kontaktfooter);

kontaktfooter.setAttribute('id', 'EMail');


//Create Element a + href + id: linkEMail

div = document.getElementById('EMail');
EMail = document.createElement('a');
div.appendChild(EMail);

EMail.setAttribute('href', 'mailto:patrizel@web.de')
EMail.setAttribute('id', 'linkEMail');


//Create Element h5 + id: linkEMailinhalt + Text Node

div = document.getElementById('linkEMail');
linkEMail = document.createElement('h5');
div.appendChild(linkEMail);

linkEMail.setAttribute('id', 'linkEMailinhalt');

linkEMailinhalt = document.getElementById('linkEMailinhalt');
linkEMailinhalt.appendChild(document.createTextNode('patrizel@web.de'));




//Create Element tel-footer + id: tel

div = document.getElementById('kontaktfooter');
kontaktfooter = document.createElement('tel-footer');
div.appendChild(kontaktfooter);

kontaktfooter.setAttribute('id', 'tel');


//Create Element a + href + id: linktel

div = document.getElementById('tel');
tel = document.createElement('a');
div.appendChild(tel);

tel.setAttribute('href', 'tel:06226972288')
tel.setAttribute('id', 'linktel');


//Create Element h5 + id: linktelinhalt + Text Node

div = document.getElementById('linktel');
linktel = document.createElement('h5');
div.appendChild(linktel);

linktel.setAttribute('id', 'linktelinhalt');

linktelinhalt = document.getElementById('linktelinhalt');
linktelinhalt.appendChild(document.createTextNode('Tel: 06226 972288'));





//Create Element mobil-footer + id: mobil

div = document.getElementById('kontaktfooter');
kontaktfooter = document.createElement('mobil-footer');
div.appendChild(kontaktfooter);

kontaktfooter.setAttribute('id', 'mobil');


//Create Element a + href + id: linktel

div = document.getElementById('mobil');
mobil = document.createElement('a');
div.appendChild(mobil);

tel.setAttribute('href', 'tel:01632566401')
tel.setAttribute('id', 'linkmobil');


//Create Element h5 + id: linktelinhalt + Text Node

div = document.getElementById('linkmobil');
linkmobil = document.createElement('h5');
div.appendChild(linkmobil);

linkmobil.setAttribute('id', 'linkmobilinhalt');

linkmobilinhalt = document.getElementById('linkmobilinhalt');
linkmobilinhalt.appendChild(document.createTextNode('Mobil: 0163 2566401'));







//Create Element Informationen-footer + id: informationen

div = document.getElementById('inhaltbottom');
inhaltbottom = document.createElement('Informationen-footer');
div.appendChild(inhaltbottom);

inhaltbottom.setAttribute('id', 'Informationenfooter');


//Create Element h3 + id: überschrift3 + TextNode

div = document.getElementById('Informationenfooter');
Informationenfooter = document.createElement('h3');
div.appendChild(Informationenfooter);

Informationenfooter.setAttribute('id', 'überschrift3');

ü3 = document.getElementById('überschrift3');
ü3.appendChild(document.createTextNode('Galerie'));




//Create Element infos-hof-footer + id: infohoffooter

div = document.getElementById('Informationenfooter');
Informationenfooter = document.createElement('infos-hof-footer');
div.appendChild(Informationenfooter);

Informationenfooter.setAttribute('id', 'infohoffooter');


//Create Element a + href + id: linkinfohoffooter

div = document.getElementById('infohoffooter');
infohoffooter = document.createElement('a');
div.appendChild(infohoffooter);

infohoffooter.setAttribute('href', '')
infohoffooter.setAttribute('id', 'linkinfohoffooter');
infohoffooter.setAttribute('class', 'not-available');




//Create Element Bilder-Galerie-footer + id: BilderGalerie

div = document.getElementById('Informationenfooter');
Informationenfooter = document.createElement('Bilder-Galerie-footer');
div.appendChild(Informationenfooter);

Informationenfooter.setAttribute('id', 'BilderGalerie');


//Create Element a + href + id: linkBilderGalerie

div = document.getElementById('BilderGalerie');
BilderGalerie = document.createElement('a');
div.appendChild(BilderGalerie);

BilderGalerie.setAttribute('href', '/Unterseiten/bilder/bilder.html')
BilderGalerie.setAttribute('id', 'linkBilderGalerie');


//Create Element h5 + id: linkBilderGalerieinhalt + Text Node

div = document.getElementById('linkBilderGalerie');
linkBilderGalerie = document.createElement('h5');
div.appendChild(linkBilderGalerie);

linkBilderGalerie.setAttribute('id', 'linkBilderGalerieinhalt');


linkBilderGalerieinhalt = document.getElementById('linkBilderGalerieinhalt');
linkBilderGalerieinhalt.appendChild(document.createTextNode('Bilder Galerie'));









//Create Element Datenschutz-footer + id: datenschutzfooter + href: /Unterseiten/Datenschutz/datenschutz.html

div = document.getElementById('inhaltbottom');
inhaltbottom = document.createElement('Datenschutz-footer');
div.appendChild(inhaltbottom);

inhaltbottom.setAttribute('id', 'datenschutzfooter');


//Create Element h3 + id: überschrift1 + TextNode

div = document.getElementById('datenschutzfooter');
datenschutzfooter = document.createElement('h3');
div.appendChild(datenschutzfooter);

datenschutzfooter.setAttribute('id', 'überschrift1');

ü1 = document.getElementById('überschrift1');
ü1.appendChild(document.createTextNode('Datenschutz'));






//Create Element Impressum-footer + id: impressum

div = document.getElementById('datenschutzfooter');
datenschutzfooter = document.createElement('Impressum-footer');
div.appendChild(datenschutzfooter);

datenschutzfooter.setAttribute('id', 'impressum');


//Create Element a + href + id: linkimpressum

div = document.getElementById('impressum');
impressum = document.createElement('a');
div.appendChild(impressum);

impressum.setAttribute('href', '/Unterseiten/Impressum/impressum.html')
impressum.setAttribute('id', 'linkimpressum');


//Create Element h5 + id: linkimpressuminhalt + Text Node

div = document.getElementById('linkimpressum');
linkimpressum = document.createElement('h5');
div.appendChild(linkimpressum);

linkimpressum.setAttribute('id', 'linkimpressuminhalt');

linkimpressuminhalt = document.getElementById('linkimpressuminhalt');
linkimpressuminhalt.appendChild(document.createTextNode('Impressum'));






//Create Element Datenschutz-footer + id: datenschutz

div = document.getElementById('datenschutzfooter');
datenschutzfooter = document.createElement('Datenschutz-footer');
div.appendChild(datenschutzfooter);

datenschutzfooter.setAttribute('id', 'datenschutz');


//Create Element a + href: /Unterseiten/Datenschutz/datenschutz.html + id: linkdatenschutz

div = document.getElementById('datenschutz');
datenschutz = document.createElement('a');
div.appendChild(datenschutz);

datenschutz.setAttribute('href', '/Unterseiten/Datenschutz/datenschutz.html')
datenschutz.setAttribute('id', 'linkdatenschutz');


//Create Element h5 + id: linkdatenschutzinhalt + Text Node

div = document.getElementById('linkdatenschutz');
linkdatenschutz = document.createElement('h5');
div.appendChild(linkdatenschutz);

linkdatenschutz.setAttribute('id', 'linkdatenschutzinhalt');

linkdatenschutzinhalt = document.getElementById('linkdatenschutzinhalt');
linkdatenschutzinhalt.appendChild(document.createTextNode('Datenschutz'));



