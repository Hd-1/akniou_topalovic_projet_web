function resteRedaction(texte)
{
    var restants=250-texte.length;
    document.getElementById('caracteresRedaction').innerHTML=restants;
}

function resteTitre(texte)
{
    var restants=250-texte.length;
    document.getElementById('caracteresTitre').innerHTML=restants;
}