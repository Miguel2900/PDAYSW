var txt = '<autos>';
txt += '<auto>';
txt += '<marca>Audi</marca>';
txt += '<modelo>A3</modelo>';
txt += '<placas>P02ADT</placas>';
txt += '<año>2020</año>';
txt += '<plazas>4</plazas>';
txt += '<comentarios>Ninguno</comentarios>';
txt += '</auto>';
txt += '<auto>';
txt += '<marca>Mercedes</marca>';
txt += '<modelo>ded</modelo>';
txt += '<placas>DT</placas>';
txt += '<año>2022</año>';
txt += '<plazas>2</plazas>';
txt += '<comentarios>Si</comentarios>';
txt += '</auto>';
txt += '</autos>';

var parser = new DOMParser();
var xmlDoc = parser.parseFromString(txt, "text/xml");

function alta() {
    document.getElementById("altas").style.display = "block";
	document.getElementById("bajas").style.display = "none";
	document.getElementById("buscar2").style.display = "none";
	document.getElementById("cambios").style.display = "none";
	document.getElementById("reporte2").style.display = "none";
}//alta

function register() {

    marca = document.getElementById("marcaA").value;
    console.log(marca);
    modelo = document.getElementById("modeloA").value;
    console.log(modelo);
    placa = document.getElementById("placasA").value;
    console.log(placa);
    anio = document.getElementById("añoA").value;
    console.log(anio);
    plazas = document.getElementById("plazasA").value;
    console.log(plazas);
    comentarios = document.getElementById("valetA").value;
    console.log(comentarios);

    newEleMarca = xmlDoc.createElement("marca");
    newTxtMarca = xmlDoc.createTextNode(marca);
    newEleMarca.appendChild(newTxtMarca);

    newEleModelo = xmlDoc.createElement("modelo");
    newTxtModelo = xmlDoc.createTextNode(modelo);
    newEleModelo.appendChild(newTxtModelo);

    newElePlaca = xmlDoc.createElement("placas");
    newTxtPlaca = xmlDoc.createTextNode(placa);
    newElePlaca.appendChild(newTxtPlaca);

    newEleAnio = xmlDoc.createElement("año");
    newTxtAnio = xmlDoc.createTextNode(anio);
    newEleAnio.appendChild(newTxtAnio);

    newElePlaza = xmlDoc.createElement("plazas");
    newTxtPlaza = xmlDoc.createTextNode(plazas);
    newElePlaza.appendChild(newTxtPlaza)

    newEleCom = xmlDoc.createElement("comentarios");
    newTxtCom = xmlDoc.createTextNode(comentarios);
    newEleCom.appendChild(newTxtCom);

    newEleA = xmlDoc.createElement("auto");
    newEleA.appendChild(newEleMarca);
    newEleA.appendChild(newEleModelo);
    newEleA.appendChild(newElePlaca);
    newEleA.appendChild(newEleAnio);
    newEleA.appendChild(newElePlaza);
    newEleA.appendChild(newEleCom);

    xmlDoc.getElementsByTagName("autos")[0].appendChild(newEleA);
    alert("Alta realizada");
}//registrar

function report() {
    document.getElementById("altas").style.display = "none";
	document.getElementById("bajas").style.display = "none";
	document.getElementById("buscar2").style.display = "none";
	document.getElementById("cambios").style.display = "none";
	document.getElementById("reporte2").style.display = "block";


    var table = document.getElementById("reporte");

    table.innerHTML = "<thead><tr>"
        + "<th>Marca</th>"
        + "<th>Modelo</th>"
        + "<th>Placas</th>"
        + "<th>Año</th>"
        + "<th>Plazas</th>"
        + "<th>Valet</th>"
        + "</tr></thead>"
        + "<tbody>";
    
    x = xmlDoc.getElementsByTagName("auto");
    l = x.length;
    console.log(l);

    for (i = 0; i < l; i++) {
        table.innerHTML += "<tr>"
            + "<td>"
            + x[i].childNodes[0].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + x[i].childNodes[1].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + x[i].childNodes[2].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + x[i].childNodes[3].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + x[i].childNodes[4].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + x[i].childNodes[5].childNodes[0].nodeValue
            + "</td>"

            + "</tr>";
    }
    table.innerHTML += "</tbody>"
}//reporte

function buscar() {
	document.getElementById("altas").style.display = "none";
	document.getElementById("bajas").style.display = "none";
	document.getElementById("buscar2").style.display = "block";
	document.getElementById("cambios").style.display = "none";
	document.getElementById("reporte2").style.display = "none";
}//bsucar

function busqueda(){
	campo = document.getElementById("campoBusqueda").value;
    console.log(campo);
	valor = document.getElementById("textoBusqueda").value;
    console.log(valor);
	a = xmlDoc.getElementsByTagName("auto");
	x = xmlDoc.getElementsByTagName(campo);
	l = a.length;	
	cont = 0;
	
	var tabla = document.getElementById("resultadoBusqueda");
	
	tabla.innerHTML = "<thead><tr>"
                    + "<th>Marca</th>"
                    + "<th>Modelo</th>"
                    + "<th>Placas</th>"
                    + "<th>Año</th>"
                    + "<th>Plazas</th>"
                    + "</tr></thead>"
                    + "<tbody>";

	
	for(i=0; i<l; i++)
	{
		if(x[i].childNodes[0].nodeValue == valor)
		{
			tabla.innerHTML += "<tr>"
            + "<td>"
            + a[i].childNodes[0].childNodes[0].nodeValue
            + "</td>"
            
            + "<td>"
            + a[i].childNodes[1].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + a[i].childNodes[2].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + a[i].childNodes[3].childNodes[0].nodeValue
            + "</td>"

            + "<td>"
            + a[i].childNodes[4].childNodes[0].nodeValue
            + "</td>"

            + "</tr>";

		    cont++;
		}//if					
	}//for
	
	tabla.innerHTML += "</tbody>";	
	
	if (cont==0)
		document.getElementById("message").innerHTML = "No hay coincidencias.";
	else
		document.getElementById("message").innerHTML = "Se encontraron "+cont+" coincidencias";
}//busqueda

function cambios(){
	document.getElementById("altas").style.display = "none";
	document.getElementById("bajas").style.display = "none";
	document.getElementById("buscar2").style.display = "none";
	document.getElementById("cambios").style.display = "block";
	document.getElementById("reporte2").style.display = "none";
}//cambios

function changeData(){
	clave = document.getElementById("buscarC").value;
	i = 0; //index
	flag = false;
	
	x = xmlDoc.getElementsByTagName("auto");
	l = x.length;
	
	while((i<l) && (flag == false))
	{
		if(x[i].childNodes[2].childNodes[0].nodeValue == clave)
		{
			//Se colocan los valores en el formulario
			document.getElementById("marcaC").value =
				x[i].childNodes[0].childNodes[0].nodeValue;
			document.getElementById("modeloC").value =
				x[i].childNodes[1].childNodes[0].nodeValue;	
                document.getElementById("placasC").value =
				x[i].childNodes[2].childNodes[0].nodeValue;	
			document.getElementById("añoC").value =
				x[i].childNodes[3].childNodes[0].nodeValue;	
            document.getElementById("plazasC").value =
				x[i].childNodes[4].childNodes[0].nodeValue;
            document.getElementById("valetC").value =
				x[i].childNodes[5].childNodes[0].nodeValue;
                
			indexEncontrado = i;
			flag = true;
		}//if
		else
		{
			i++
		}//else
		
	}//while
	
	if (flag)
		document.getElementById("formCambios").style.display = "block";
	else  
		alert("Ningun coche tiene esa placa");
}//changeData

function updateData(){
	i = indexEncontrado;
	
	x = xmlDoc.getElementsByTagName("auto");
	
	x[i].childNodes[0].childNodes[0].nodeValue =
		document.getElementById("marcaC").value;
	
	x[i].childNodes[1].childNodes[0].nodeValue =
		document.getElementById("modeloC").value;
		
	x[i].childNodes[2].childNodes[0].nodeValue = 
        document.getElementById("placasC").value;
		
	x[i].childNodes[3].childNodes[0].nodeValue =
		document.getElementById("añoC").value;

    x[i].childNodes[4].childNodes[0].nodeValue =
		document.getElementById("plazasC").value;
    
    x[i].childNodes[5].childNodes[0].nodeValue =
		document.getElementById("valetC").value;
		
	alert("Actualización realizada");
}//updateData

function bajas()
{
	document.getElementById("altas").style.display = "none";
	document.getElementById("bajas").style.display = "block";
	document.getElementById("buscar2").style.display = "none";
	document.getElementById("cambios").style.display = "none";
	document.getElementById("reporte2").style.display = "none";
}//bajas

function deleteData()
{
	clave = document.getElementById("claveB").value;
	x = xmlDoc.getElementsByTagName("auto");
	l = x.length;
	i = 0;
	flag = false;
	
	while((i < l) && (flag==false))
	{
		if(x[i].childNodes[2].childNodes[0].nodeValue == clave)
		{
			baja = confirm("Dar de baja : "
							+x[i].childNodes[0].childNodes[0].nodeValue
							+" - "
							+x[i].childNodes[1].childNodes[0].nodeValue
                            +" - "
                            +x[i].childNodes[2].childNodes[0].nodeValue
							+" - "
							+x[i].childNodes[3].childNodes[0].nodeValue
                            +" - "
							+x[i].childNodes[4].childNodes[0].nodeValue
							+" ?");
			if (baja == true)
			{
				x[i].parentNode.removeChild(x[i]);
				alert("Auto dado de baja");
				flag = true;
			}//if
		}//if
		else
		{
			i++;
		}
	}//while
	
	if (flag == false) {
		alert("Auto no encontrado");
	}
}//deleteData


