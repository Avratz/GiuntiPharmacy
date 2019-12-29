(function(){
  let dia, turnos, fecha, mes, labelTurno, meses, labelTurnoFooter, d1, d2, d3, d4;
  fecha = new Date();
  dia = fecha.getDate();
  mes = fecha.getMonth();

  d1 = 8;
  d2 = 14;
  d3 = 24;
  d4 = 29;

  labelTurno = document.getElementById('dia-turno');
  labelTurnoFooter = document.getElementById('dia-turno-footer');
  meses = ["enero", "febrero", "marzo", "abril", "mayo" , "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"]
  //turnos = [3, 9, 19, 25];
  if (mes === 7) {
    labelTurno.innerHTML = labelTurno.innerHTML.replace('%mes%', meses[mes]);
    labelTurnoFooter.innerHTML = labelTurnoFooter.innerHTML.replace('%mes%', meses[mes]);
    if (dia > d1 && dia <= d2) {
      labelTurno.innerHTML = labelTurno.innerHTML.replace('%dia%', d2);
      labelTurnoFooter.innerHTML = labelTurnoFooter.innerHTML.replace('%dia%', d2);
    } else if (dia > d2 && dia <= d3) {
      labelTurno.innerHTML = labelTurno.innerHTML.replace('%dia%', d3);
      labelTurnoFooter.innerHTML = labelTurnoFooter.innerHTML.replace('%dia%', d3);
    } else if (dia > d3 && dia <= d4) {
      labelTurno.innerHTML = labelTurno.innerHTML.replace('%dia%', d4);
      labelTurnoFooter.innerHTML = labelTurnoFooter.innerHTML.replace('%dia%', d4);
    } else {
      labelTurno.innerHTML = labelTurno.innerHTML.replace('%dia%', d1);
      labelTurnoFooter.innerHTML = labelTurnoFooter.innerHTML.replace('%dia%', d1);
    }
  }

})();



var fecha, hora, labelLun, labelSab, labelDom, turnos, primero, segundo, tercero;

labelLun = document.getElementById('lun');
labelSab = document.getElementById('sab');
labelDom = document.getElementById('dom');

labelSab.style.display = "none";
labelDom.style.display = "none";

var cont = 0;
function contador(){

  if (cont === 0) {
    labelLun.style.display = "block";
    labelSab.style.display = "none";
    labelDom.style.display = "none";
  } else if (cont === 1) {
    labelLun.style.display = "none";
    labelSab.style.display = "block";
    labelDom.style.display = "none";

  } else if (cont === 2) {
    labelLun.style.display = "none";
    labelSab.style.display = "none";
    labelDom.style.display = "block";
    cont = -1;
  }
	cont++;

}

setInterval('contador()',3000);

var paso = false;
function stickySavia() {
  var y = window.scrollY;
   if (y > 250) {
     $(".sticktop")
     .addClass("stickyanimatedown")
     .removeClass("stickyanimateup")
     .removeClass("sticky-top-opacity");
     paso = true;
   }
   if ((y < 250) && (paso == true)) {
     $(".sticktop")
     .removeClass("stickyanimatedown")
     .addClass("stickyanimateup")
     .addClass("sticky-top-opacity");
   }
};


window.addEventListener('scroll', stickySavia);
