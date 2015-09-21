$(function(){
  var line_options = {
    xaxis: {thickLength: 0, min: 0},
    yaxis: {thickLength: 0, min: 0},
    grid: {show: false, borderWidth: 0, hoverable: true},
    series: {
      lines: {show: true, fill: true},
      points: {show: true, radius: 2, fillColor: '#ffffff'}
    }
  };

  var bar_options = {
    xaxis: {thickLength: 0, min: 0},
    yaxis: {thickLength: 0, min: 0},
    grid: {show: false, borderWidth: 0, hoverable: true},
    series: {
      bars: {show: true, fill: true}
    }
  };

  var visits = [[1, 15], [2, 19], [3, 24], [4, 21], [5, 12], [6, 24], [7, 28], [8, 21], [9, 25], [10, 18]];
  var data_visits = [{data: visits, color: '#3ea58a'}];
  $.plot($('#access-stat'), data_visits, line_options);

  var news = [[1, 6], [2, 5], [3, 8], [4, 1], [5, 2], [6, 0], [7, 2], [8, 5], [9, 4], [10, 2]];
  var data_news = [{data: news, color: '#9273a0'}];
  $.plot($('#new-stat'), data_news, line_options);

  var points = [[1, 850], [2, 1200], [3, 260], [4, 550], [5, 1200], [6, 2100], [7, 1850], [8, 1900], [9, 2010], [10, 1750]];
  var data_points = [{data: points, color: '#c63b50'}];
  $.plot($('#points-stat'), data_points, line_options);

  var redemptions = [[1, 2], [2, 7], [3, 4], [4, 4], [5, 2], [6, 7], [7, 6], [8, 10], [9, 2], [10, 6]];
  var data_redemptions = [{data: redemptions, color: '#448db5'}];
  $.plot($('#redemptions-stat'), data_redemptions, line_options);
});