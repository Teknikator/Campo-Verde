//Create div + class"container"

div = document.getElementById('cookies');
cookies = document.createElement('div');
div.appendChild(cookies);

cookies.setAttribute('class', 'container');
cookies.setAttribute('id', 'container');


div = document.getElementById('container');
container = document.createElement('div');
div.appendChild(container);

container.setAttribute('class', 'cookies');
container.setAttribute('id', 'cookies2');

div = document.getElementById('cookies2');
cookies2 = document.createElement('p');
div.appendChild(cookies2);

cookies2.setAttribute('class', 'textinhaltcookies');
cookies2.setAttribute('id', 'textinhaltcookies');


textinhaltcookies = document.getElementById('textinhaltcookies');
textinhaltcookies.appendChild(document.createTextNode('Diese Website verwendet Cookies, um Ihnen eine optimale Nutzung der Website zu ermöglichen.'));

div = document.getElementById('textinhaltcookies');
textinhaltcookies = document.createElement('a');
div.appendChild(textinhaltcookies);


textinhaltcookies.setAttribute('href', '/Unterseiten/Datenschutz/datenschutz.html');
textinhaltcookies.setAttribute('id', 'cookiesa')

cookiesa = document.getElementById('cookiesa')
cookiesa.appendChild(document.createTextNode('Weitere Informationen.'))


div = document.getElementById('cookies2');
cookies2 = document.createElement('button');
div.appendChild(cookies2);

cookies2.setAttribute('id', 'cookies-btn')


cookiesbtn = document.getElementById('cookies-btn')
cookiesbtn.appendChild(document.createTextNode('Aktzeptieren'))




setCookie = (cName, cValue, expDays) => {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}

getCookie = (cName) => {
    const name =  cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split("; ");
    let value;
    cArr.forEach(val => {
        if(val.indexOf(name) === 0) value = val.substring(name.length);
    })

    return value;
}

document.querySelector("#cookies-btn").addEventListener("click", () => {
    document.querySelector("#cookies").style.display = "none";
    setCookie("cookie", true, 30);                                   //die 30 steht für die Zeit wann man es wieder Aktzeptieren muss (30Tage in dem Fall)//
})

cookieMessage = () => {
    if(!getCookie("cookie"))
       document.querySelector("#cookies").style.display = "block";
}

window.addEventListener("load", cookieMessage);