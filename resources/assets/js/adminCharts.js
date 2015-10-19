var topColors = ['#4cc3a3', '#4da1d0', '#a883b7', '#e4687c', '#ffc000', '#2f5597'];
var timeline = [
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 20 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'primary'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 5 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'success'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 10 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'info'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 20 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'danger'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 25 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'info'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 20 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'success'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 20 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'warning'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 10 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'info'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 20 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'warning'},
  {icon: 'fa fa-user', name: 'Jugador', action: ' ha ganado 10 ptos', detail: 'Nivel 2 del curso de Excel superado', style: 'danger'}
];
var path = '../../resources/assets/img/users/';

$(function(){
  $.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
    $.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

      Morris.Donut({
        element: 'access-chart',
        data: [
          {label: "6am - 9am", value: 40},
          {label: "9am - 12pm", value: 25},
          {label: "12pm - 3pm", value: 30},
          {label: "3pm - 6pm", value: 19},
          {label: "6pm - 9pm", value: 8},
        ],
        colors: topColors,
        labelColor: '#666'
      });

      Morris.Donut({
        element: 'league-chart',
        data: [
          {label: "Liga 1", value: 80},
          {label: "Liga 2", value: 51},
          {label: "Liga 3", value: 26},
          {label: "Liga 4", value: 19},
          {label: "Liga 5", value: 11},
          {label: "Liga 6", value: 4},
        ],
        colors: topColors,
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
          {y: 'Equipos', a: 90, b: 86, c: 74, d: 67, e: 65}
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
  showStats();
  showTimeline();
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
    points.innerHTML = (10 - i) + ' ptos';
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
    name.innerHTML = 'Equipo ' + i;

    var points = document.createElement('div');
    points.style.color = '#666';
    points.innerHTML = (10 - i) + ' ptos';
    points.style.fontSize = '10px';

    data.appendChild(name);
    data.appendChild(points);

    row.appendChild(img);
    row.appendChild(data);

    $('#top-courses-table').append(row);
  }
}

function showStats(){
  var line_options = {
    xaxis: {thickLength: 0, min: 0},
    yaxis: {thickLength: 0, min: 0},
    grid: {show: false, borderWidth: 0, hoverable: true},
    series: {
      lines: {show: true, fill: true},
      points: {show: true, radius: 2, fillColor: '#ffffff'}
    }
  };

  var green = [[1, 2153], [2, 2190], [3, 2476], [4, 2213], [5, 2126], [6, 2415], [7, 2350], [8, 2180], [9, 2500], [10, 2560]];
  var data_green = [{data: green, color: '#3ea58a'}];
  $.plot($('#green-stat'), data_green, line_options);

  var blue = [[1, 1064], [2, 953], [3, 867], [4, 1159], [5, 1268], [6, 1026], [7, 1252], [8, 1541], [9, 1475], [10, 1354]];
  var data_blue = [{data: blue, color: '#448db5'}];
  $.plot($('#blue-stat'), data_blue, line_options);

  var purple = [[1, 75], [2, 62], [3, 54], [4, 55], [5, 48], [6, 71], [7, 85], [8, 90], [9, 85], [10, 78]];
  var data_purple = [{data: purple, color: '#9273a0'}];
  $.plot($('#purple-stat'), data_purple, line_options);

  var pink = [[1, 82], [2, 77], [3, 64], [4, 84], [5, 82], [6, 78], [7, 69], [8, 90], [9, 72], [10, 81]];
  var data_pink = [{data: pink, color: '#c63b50'}];
  $.plot($('#pink-stat'), data_pink, line_options);
}

function showTimeline(){
  for(var i=0; i<timeline.length; i++){
    var art = document.createElement('article');
    art.className = 'timeline-entry'

    var entry = document.createElement('div');
    entry.className = 'timeline-entry-inner';

    var badge = document.createElement('div');
    badge.className = 'timeline-icon bg-' + timeline[i].style;

    var icon = document.createElement('i');
    icon.className = timeline[i].icon;

    badge.appendChild(icon);

    var label = document.createElement('div');
    label.className = 'timeline-label';

    var title = document.createElement('h2');

    var name = document.createElement('a');
    name.href = '#';
    name.innerHTML = timeline[i].name;

    var action = document.createElement('span');
    action.innerHTML = timeline[i].action;

    title.appendChild(name);
    title.appendChild(action);

    var text = document.createElement('p');
    text.innerHTML = timeline[i].detail;

    label.appendChild(title);
    label.appendChild(text);

    entry.appendChild(badge);
    entry.appendChild(label);

    art.appendChild(entry);

    $('#timeline').append(art);
  }
}