
//Create copy + id:copy

div = document.getElementById('bottom');
bottom = document.createElement('copy');
div.appendChild(bottom);

bottom.setAttribute('id', 'copy');


//Create h5 + id: copyh5 + TextNode

div = document.getElementById('copy');
copy = document.createElement('h5');
div.appendChild(copy);

copy.setAttribute('id', 'copyh5');

copyh5 = document.getElementById('copyh5');
copyh5.appendChild(document.createTextNode('© Copyright 2023 Campo Verde'));



//Halte Copy Datum Aktuell

document.getElementById("copyh5").innerHTML = "© Copyright  " + new Date().getFullYear() + " Campo Verde";



//Create h6 + id: copyV + a + href + id: copyVa + TextNode

div = document.getElementById('copy');
copy = document.createElement('h6');
div.appendChild(copy);

copy.setAttribute('id', 'copyV');


div = document.getElementById('copyV');
copyV = document.createElement('a');
div.appendChild(copyV);

copyV.setAttribute('href', '/Unterseiten/Version/version.html')
copyV.setAttribute('id', 'copyVa');

copyVa = document.getElementById('copyVa');
copyVa.appendChild(document.createTextNode('Version 0.4'));



//Create h6 + id: copyD + TextNode + a + href + class: Teknikator + id: copyDa + TextNode

div = document.getElementById('copy');
copy = document.createElement('h6');
div.appendChild(copy);

copy.setAttribute('id', 'copyD');

copyD = document.getElementById('copyD');
copyD.appendChild(document.createTextNode('Designed by '));


div = document.getElementById('copyD');
copyD = document.createElement('a');
div.appendChild(copyD);

copyD.setAttribute('href', 'http://45.145.224.53')
copyD.setAttribute('class', 'Teknikator')
copyD.setAttribute('id', 'copyDa');

copyDa = document.getElementById('copyDa');
copyDa.appendChild(document.createTextNode('@Teknikator'));



