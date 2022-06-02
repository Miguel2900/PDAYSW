function alta_contacto(){
    document.getElementById("eme_ata").style.display = "block";
	document.getElementById("em_rep").style.display = "none";
    document.getElementById("em_bqd").style.display = "none";
    document.getElementById("em_baja").style.display = "none";
    document.getElementById("em_act").style.display = "none";
}

function reporte_contacto(){
    document.getElementById("eme_ata").style.display = "none";
	document.getElementById("em_rep").style.display = "block";
    document.getElementById("em_bqd").style.display = "none";
    document.getElementById("em_baja").style.display = "none";
    document.getElementById("em_act").style.display = "none";
}

function busqueda_contacto(){
    document.getElementById("eme_ata").style.display = "none";
	document.getElementById("em_rep").style.display = "none";
    document.getElementById("em_bqd").style.display = "block";
    document.getElementById("em_baja").style.display = "none";
    document.getElementById("em_act").style.display = "none";
}

function baja_contacto(){
    document.getElementById("eme_ata").style.display = "none";
	document.getElementById("em_rep").style.display = "none";
    document.getElementById("em_bqd").style.display = "none";
    document.getElementById("em_baja").style.display = "block";
    document.getElementById("em_act").style.display = "none";
}

function actualiza_contacto(){
    document.getElementById("eme_ata").style.display = "none";
	document.getElementById("em_rep").style.display = "none";
    document.getElementById("em_bqd").style.display = "none";
    document.getElementById("em_baja").style.display = "none";
    document.getElementById("em_act").style.display = "block";
}

function ac(){
    window.location.reload(true);
    document.getElementById("altaaa").style.display = "block";
}

