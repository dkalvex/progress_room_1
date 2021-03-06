var topColors = ['#ddd', '#ddd', '#e4687c', '#ddd', '#ddd'];
var path = '../../resources/assets/img/users/';

$(function(){
  $.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
    $.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){
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
    });
  });

  var line_options = {
    xaxis: {thickLength: 0, min: 0},
    yaxis: {thickLength: 0, min: 0},
    grid: {show: false, borderWidth: 0, hoverable: true},
    series: {
      lines: {show: true, fill: true},
      points: {show: true, radius: 2, fillColor: '#ffffff'}
    }
  };

  var green = [[1, 2], [2, 3], [3, 4], [4, 2], [5, 1], [6, 4], [7, 2], [8, 2], [9, 5], [10, 4]];
  var data_green = [{data: green, color: '#3ea58a'}];
  $.plot($('#green-stat'), data_green, line_options);

  var blue = [[1, 60], [2, 50], [3, 80], [4, 100], [5, 120], [6, 200], [7, 150], [8, 50], [9, 40], [10, 150]];
  var data_blue = [{data: blue, color: '#448db5'}];
  $.plot($('#blue-stat'), data_blue, line_options);

  var purple = [[1, 0], [2, 0], [3, 1], [4, 1], [5, 1], [6, 1], [7, 1], [8, 1], [9, 2], [10, 2]];
  var data_purple = [{data: purple, color: '#9273a0'}];
  $.plot($('#purple-stat'), data_purple, line_options);

  var pink = [[1, 1], [2, 3], [3, 4], [4, 4], [5, 5], [6, 7], [7, 7], [8, 8], [9, 9], [10, 9]];
  var data_pink = [{data: pink, color: '#c63b50'}];
  $.plot($('#pink-stat'), data_pink, line_options);

  showPlayersTable();
});

function showPlayersTable(){
  for(var i=0; i<5; i++){
    var row = document.createElement('div');
    row.className = 'row top-row';

    var img = document.createElement('img');
    img.src = path + 'default.png';
    img.className = 'col-xs-4 top-players-photo';

    var data = document.createElement('div');
    data.className = 'col-xs-8';

    var name = document.createElement('div');
    name.className = 'top-row-title';
    name.style.color = '#666';
    name.innerHTML = 'Jugador ' + i;
    if(i == 2){
      row.className += ' active-row';
      name.innerHTML = 'Yo';
    }

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