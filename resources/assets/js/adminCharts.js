var topColors = ['#3C9787', '#CA7B5F', '#8964A2', '#CA595D', '#246F9A'];
var path = '../../resources/assets/img/users/';

$(function(){
  $.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
    $.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

      Morris.Line({
        element: 'daily-players',
        data: [
          {day: 'Jue', value: 14},
          {day: 'Vie', value: 23},
          {day: 'Sab', value: 20},
          {day: 'Dom', value: 12},
          {day: 'Lun', value: 15},
          {day: 'Ayer', value: 10},
          {day: 'Hoy', value: 18}
        ],
        xkey: 'day',
        ykeys: ['value'],
        labels: ['Jugadores'],
        lineColors: ['#f60'],
        parseTime: false
      });
      
      Morris.Donut({
        element: 'active-players',
        data: [
          {label: "Activos", value: 12},
          {label: "Inactivos", value: 30},
        ],
        colors: ['#4CC3A5', '#EFEFEF'],
        labelColor: '#666'
      });

      Morris.Donut({
        element: 'active-courses',
        data: [
          {label: "Activos", value: 10},
          {label: "Inactivos", value: 4},
        ],
        colors: ['#A883B9', '#EFEFEF'],
        labelColor: '#666'
      });

      Morris.Donut({
        element: 'active-missions',
        data: [
          {label: "Activos", value: 20},
          {label: "Inactivos", value: 14},
        ],
        colors: ['#4DA1CF', '#EFEFEF'],
        labelColor: '#666'
      });
      
      Morris.Bar({
        element: 'top-players',
        data: [
          {y: 'Jugadores', a: 90, b: 86, c: 74, d: 67, e: 65}
        ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd', 'e'],
        labels: ['Puntos'],
        barColors: topColors
      });

      Morris.Bar({
        element: 'top-courses',
        data: [
          {y: 'Cursos', a: 20, b: 17, c: 12, d: 8, e: 5}
        ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd', 'e'],
        labels: ['Jugadores'],
        barColors: topColors
      });
    });
  });
  
  showPlayersTable();
  showCoursesTable();
});

function showPlayersTable(){
  for(var i=0; i<5; i++){
    var row = document.createElement('div');
    row.className = 'row top-row';
    row.style.paddingBottom = '10px';

    var img = document.createElement('img');
    img.src = path + 'default.png';
    img.className = 'col-xs-4 top-players-photo';
    img.style.border = 'solid 3px ' + topColors[i];

    var data = document.createElement('div');
    data.className = 'col-xs-8';

    var name = document.createElement('div');
    name.style.color = topColors[i];
    name.innerHTML = 'Jugador ' + i;

    var points = document.createElement('div');
    points.style.color = '#666';
    points.innerHTML = i + ' ptos';
    points.style.fontSize = '10px';

    data.appendChild(name);
    data.appendChild(points);

    row.appendChild(img);
    row.appendChild(data);

    $('#top-players-table').append(row);
  }
}

function showCoursesTable(){
  for(var i=0; i<5; i++){
    var row = document.createElement('div');
    row.className = 'row top-row';
    row.style.paddingBottom = '10px';

    var img = document.createElement('img');
    img.src = path + 'default.png';
    img.className = 'col-xs-4 top-players-photo';
    img.style.border = 'solid 3px ' + topColors[i];

    var data = document.createElement('div');
    data.className = 'col-xs-8';

    var name = document.createElement('div');
    name.style.color = topColors[i];
    name.innerHTML = 'Curso ' + i;

    var points = document.createElement('div');
    points.style.color = '#666';
    points.innerHTML = i + ' jugadores';
    points.style.fontSize = '10px';

    data.appendChild(name);
    data.appendChild(points);

    row.appendChild(img);
    row.appendChild(data);

    $('#top-courses-table').append(row);
  }
}