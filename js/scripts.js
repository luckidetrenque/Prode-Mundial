// Web page fully Loaded. HTML, Javascript, CSS, Images, Iframes and objects are fully loaded.
window.addEventListener("load", function (e) {
  // alert("Web page fully Loaded. HTML, Javascript, CSS, Images, Iframes and objects are fully loaded.");
  // console.log(e);
  showPositions();
});

// Define el path (protocolo+host+ruta)
const protocol = window.location.protocol;
const host = window.location.hostname;
const path = window.location.pathname;
const currentUrl = protocol + '//' + host + path;

// Mostrar mas datos en la tabla de posiciones
// const page = document.querySelectorAll('tfoot > tr > td > a');
// page.addEventListener('click', (e) => {
//   e.preventDefault();
//   var tbody = document.getElementsByTagName('tbody');
//   for (var i = 0; i < tbody.length; i++) {
//     tbody[i].style.display = 'none';
//   }
//   document.getElementById(page).style.display = 'table-row-group';
// })

function showPosition(page) {
  event.preventDefault();
  const tbody = document.getElementsByTagName('tbody');
  for (let i = 0; i < tbody.length; i++) {
    tbody[i].style.display = 'none';
  }
  document.getElementById(page).style.display = 'table-row-group';
}

function formatPosition(position, icon, color) {
  position.parentElement.cells[1].innerHTML = `<i class="fa-solid ${icon} ${color}"></i>${position.parentElement.cells[1].innerHTML}`;
  position.parentElement.cells[0].style.fontWeight = 'bold';
  position.parentElement.cells[0].classList.add(`${color}`);
  position.parentElement.style.fontWeight = 'bold';
}

function showPositions() {
  const url = window.location.href;
  if (url == 'http://' + host + '/posiciones-fase-grupos.php' || url == 'https://' + host + '/posiciones-fase-grupos.php') {
    const td = document.querySelectorAll('tbody > tr > td:first-child');
    let n = new Array();
    // var first_place = '';
    // var second_place = '';
    for (let i = 1; i < td.length; i++) {
      if (td[i].textContent == td[i - 1].textContent) {
        n.push(i);
      }
      if (td[i - 1].textContent == 1) {
        formatPosition(td[i - 1], 'fa-trophy', 'first-place');
        // first_place += td[i - 1].parentElement.cells[1].innerHTML + '<br>';
        // localStorage.setItem('first-place', td[i-1].parentElement.cells[1].innerHTML);
        // localStorage.setItem('points-first-place', td[i - 1].parentElement.cells[2].innerHTML);
      }
      if (td[i].textContent == 2) {
        formatPosition(td[i], 'fa-medal', 'second-place');
        // second_place += td[i].parentElement.cells[1].innerHTML + '<br>';
        // localStorage.setItem('second-place', td[i-1].parentElement.cells[1].innerHTML);
        // localStorage.setItem('points-second-place', td[i].parentElement.cells[2].innerHTML);
      }
      // if (i < 92 && td[i + 1].textContent == 3) {
      //   formatPosition(td[i + 1], 'fa-medal', 'third-place');
      // }
      // if (i < 91 && td[i + 2].textContent == 4) {
      //   formatPosition(td[i + 2], 'fa-medal', 'fourth-place');
      // }
      // if (i < 90 && td[i + 3].textContent == 5) {
      //   formatPosition(td[i + 3], 'fa-medal', 'fifth-place');
      // }
      // localStorage.setItem('first-place', first_place);
      // localStorage.setItem('second-place', second_place);
    }
    localStorage.getItem('first-place') ? localStorage.removeItem('first-place') : void (0);
    localStorage.getItem('points-first-place') ? localStorage.removeItem('points-first-place') : void (0);
    localStorage.getItem('second-place') ? localStorage.removeItem('second-place') : void (0);
    localStorage.getItem('points-second-place') ? localStorage.removeItem('second-place') : void (0);

    // Poner en blanco para no repetir la posición
    for (let i = 0; i < n.length; i++) {
      td[n[i]].textContent = '';
    }
  }
}

// Fuente: http://www.javascripter.net/faq/eventtargetsrcelement.htm
function clickHandler(e) {
  let elem, evt = e ? e : event;
  if (evt.srcElement) elem = evt.srcElement;
  else if (evt.target) elem = evt.target;

  if (elem.href == 'http://' + host + '/posiciones-fase-grupos.php#' || elem.href == 'https://' + host + '/posiciones-fase-grupos.php#') {
    const a = document.querySelectorAll('tfoot > tr > td > ' + elem.tagName);
    for (let i = 0; i < a.length; i++) {
      a[i].style.backgroundColor = 'white';
      a[i].style.color = '#0275d8';
    }
    elem.style.backgroundColor = '#0275d8';
    elem.style.color = 'white';
    return true;
  }
}

document.onclick = clickHandler;

// Marcar los partidos de la fecha anterior y actual de la tabla fixture
const dates = document.querySelectorAll('.date');
const date = new Date();
const hour = date.getHours();
date.setHours(0, 0, 0, 0);
dates.forEach(d => {
  let matchDate = d.dataset.date.split('/');
  matchDate = new Date(matchDate[1] + '/' + matchDate[0] + '/' + matchDate[2]);
  if (matchDate.getTime() < date.getTime() || matchDate.getTime() === date.getTime() && hour > 18) {
    d.innerHTML = `<img src="/assets/images/referee.png" class="referee" alt="Partido finalizado"> FINAL`;
    d.parentElement.firstElementChild.style.backgroundColor = '#DAF7A6';
    d.parentElement.style.backgroundColor = '#DAF7A6';
  }
  if (matchDate.getTime() === date.getTime() && hour < 18) {
    d.parentElement.firstElementChild.style.backgroundColor = '#fff59d';
    d.parentElement.style.backgroundColor = '#fff59d';
  }
})