let cert = 0;

let clicker = document.body.querySelector('#clicker');
let certP = document.body.querySelector('#cert');

function compte() {
    cert += 1
    certP.innerHTML = "Certs : " + cert;
    return cert;
}

clicker.addEventListener('click', compte);

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


function arme(arme) {
    
    cert -= arme;
    return cert;

}

boutonCart.addEventListener('click', arme(cart));