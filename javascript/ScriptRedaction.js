function resteRedaction(texte)
{
    var restants=5000-texte.length;
    document.getElementById('caracteresRedaction').innerHTML=restants;
}

function resteTitre(texte)
{
    var restants=300-texte.length;
    document.getElementById('caracteresTitre').innerHTML=restants;
}