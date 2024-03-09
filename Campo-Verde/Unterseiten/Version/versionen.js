Array.prototype.forEach.call(document.querySelectorAll(".weitere-infos"), function( element ){
    element.addEventListener("click", function( event ){
        event.preventDefault();
        let element = event.currentTarget;
        let nummer = element.getAttribute("data-nummer");

        document.getElementById("lang" + nummer ).classList.toggle("sichtbar");

        if( document.getElementById("lang" + nummer ) .classList.contains("sichtbar"));
    })
});
