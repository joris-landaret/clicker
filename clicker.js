let cert = "";

let clicker = document.body.querySelector('#clicker');
let certP = document.body.querySelector('#cert');

// Compteur
function compte() {
    cert = (localStorage.getItem('cert'));
    cert++
    localStorage.setItem('cert', cert)
    certP.innerText = "Certs : " + cert;
    return cert;
   
}

if(localStorage.getItem('cert')) {
    certP.innerHTML = "Certs : " + localStorage.getItem('cert');
    clicker.addEventListener('click', compte);
}
else {
    
    localStorage.setItem('cert', "0");
    //certP.innerHTML = "Certs : " + cert;
}

//clicker.addEventListener('click', compte);

// Arme

// Select bouton
let boutonCart = document.body.querySelector('#cart');
let boutonArbalet = document.body.querySelector('#arbalete');
let boutonDragon = document.body.querySelector('#dragon');
let boutonVigie = document.body.querySelector('#vigie');
let boutonPercuteur = document.body.querySelector('#percuteur');
let boutonPitie = document.body.querySelector('#pitie');

// Select arme
let principal = document.body.querySelector('#principal');

// Prix arme
const cart = 20;
const arbalete = 666;
const dragon = 2186;
const vigie = 6666;
const percuteur = 11729;
const pitie = 50000;

// Prix alliés
const medecin = 100;
const ingenieur = 999;
const infiltre = 3874;
const leger = 9999;
const lourd = 17054;
const xam = 100000;


function soustrairePrix(prix) {
    cert = localStorage.getItem('cert') - prix;
    cert -= prix;
    return cert;

}

boutonCart.addEventListener('click', () => {
    soustrairePrix(cart);

});