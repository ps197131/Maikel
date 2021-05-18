<<<<<<< HEAD
var dagofnacht = new Date();

var dag = dagofnacht.getDay();
var uur = dagofnacht.getHours();
var min = dagofnacht.getMinutes();
var uurenmin = (uur * 100) + min;
var openzaterdag = 900;
var sluitzaterdag = 1700;
var openmaandag = 1230;
var sluitzaterdag = 1700;
var sluitvrijdag = 1930;
var opend = 830;
var sluit = 1800;
var text = document.getElementById("open");

switch (dag) {
    case 0:
        text.innerHTML = "De winkel is gesloten";
        break;
    case 1:
        if (uurenmin > openmaandag && uurenmin <= sluit){
            text.innerHTML = "De winkel is open";
        }
    else {
        text.innerHTML = "De winkel is gesloten";
    }
    break;

    case 2:
    case 3:
    case 4: 
    if (uurenmin > opend && uurenmin <= sluit){
        text.innerHTML = "De winkel is open";
    }
    else {
        text.innerHTML = "De winkel is gesloten";
    }
    break;
    case 5:
        if (uurenmin > opend && uurenmin <= sluitvrijdag){
            text.innerHTML = "De winkel is open";
        }
        else {
            text.innerHTML = "De winkel is gesloten";
        }
        break;
=======
var dagofnacht = new Date();

var dag = dagofnacht.getDay();
var uur = dagofnacht.getHours();
var min = dagofnacht.getMinutes();
var uurenmin = (uur * 100) + min;
var openzaterdag = 900;
var sluitzaterdag = 1700;
var openmaandag = 1230;
var sluitzaterdag = 1700;
var sluitvrijdag = 1930;
var opend = 830;
var sluit = 1800;
var text = document.getElementById("open");

switch (dag) {
    case 0:
        text.innerHTML = "De winkel is gesloten";
        break;
    case 1:
        if (uurenmin > openmaandag && uurenmin <= sluit){
            text.innerHTML = "De winkel is open";
        }
    else {
        text.innerHTML = "De winkel is gesloten";
    }
    break;

    case 2:
    case 3:
    case 4: 
    if (uurenmin > opend && uurenmin <= sluit){
        text.innerHTML = "De winkel is open";
    }
    else {
        text.innerHTML = "De winkel is gesloten";
    }
    break;
    case 5:
        if (uurenmin > opend && uurenmin <= sluitvrijdag){
            text.innerHTML = "De winkel is open";
        }
        else {
            text.innerHTML = "De winkel is gesloten";
        }
        break;
>>>>>>> c5fa516e1b48c898ae03894323aaedc77ece882b
}