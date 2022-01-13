// Denne kode skifter imellem at vise links fra hamburger menuen når der bliver trykket på hamburger ikonet
//Den skjuler og viser elementerne alt efter om der trykkes på dem
function mobileNavbarToggle() {
    let x = document.getElementById("mobileLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}