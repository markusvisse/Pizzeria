function clock()
{
    var currentDate = new Date();

    var cYear = currentDate.getFullYear();
    var cMonth = currentDate.getMonth();
    var cDate = currentDate.getDate();
    var cHours = currentDate.getHours();
    var cMinutes = currentDate.getMinutes();
    var cSeconds = currentDate.getSeconds();
    
    var Today = `${cHours<10?"0"+cHours:cHours}:${cMinutes<10?"0"+cMinutes:cMinutes}:${cSeconds<10?"0"+cSeconds:cSeconds} |`;
    var Nowadays = ` \n${cYear}-${cMonth+1}-${cDate}`;
    
    document.getElementById("clock").innerHTML = Today + Nowadays;
    setTimeout("clock()",1000);
}
