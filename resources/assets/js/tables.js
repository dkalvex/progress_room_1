$(function(){
	$('table').tablesorter({
      theme: 'dropbox',
      widthFixed: false,
      showProcessing: true,
      headerTemplate: '{content}',
      onRenderTemplate: null,
      onRenderHeader: function (index) {
          $(this).find('div.tablesorter-header-inner').addClass('roundedCorners');
      },
      cancelSelection: true,
      dateFormat: "ddmmyyyy",
      sortMultiSortKey: "shiftKey",
      sortResetKey: 'ctrlKey',
      usNumberFormat: true,
      delayInit: false,
      serverSideSorting: false,
      headers: {
          0: {
              sorter: "text"
          },
          1: {
              sorter: "digit"
          },
          2: {
              sorter: "text"
          },
          3: {
              sorter: "url"
          }
      },
      ignoreCase: true,
      sortForce: null,
      sortList: [
          [0, 0],
          [1, 0],
          [2, 0]
      ],
      sortAppend: null,
      sortInitialOrder: "asc",
      sortLocaleCompare: false,
      sortReset: false,
      sortRestart: false,
      emptyTo: "bottom",
      stringTo: "max",
      textExtraction: {
          0: function (node) {
              return $(node).text();
          },
          1: function (node) {
              return $(node).text();
          }
      },
      textSorter: null,
      initWidgets: true,

      // include zebra and any other widgets, options:
      // 'columns', 'filter', 'stickyHeaders' & 'resizable'
      // 'uitheme' is another widget, but requires loading
      // a different skin and a jQuery UI theme.
      widgets: ['zebra', 'columns', 'filter'],
      widgetOptions: {
          zebra: [
              "ui-widget-content even",
              "ui-state-default odd"],
          uitheme: 'jui',
          columns: [
              "primary",
              "secondary",
              "tertiary"],
          columns_tfoot: true,
          columns_thead: true,
          filter_childRows: false,
          filter_columnFilters: false,
          filter_saveFilters: true,
          filter_cssFilter: "tablesorter-filter",
          filter_functions: null,
          filter_hideFilters: false,
          filter_ignoreCase: true,
          filter_reset: '.reset',
          filter_searchDelay: 300,
          filter_serversideFiltering: false,
          filter_startsWith: false,
          filter_useParsedData: false,
          resizable: true,
          saveSort: true,
          stickyHeaders: "tablesorter-stickyHeader"
      },

      initialized: function (table) {},

      tableClass: 'tablesorter',
      cssAsc: "tablesorter-headerSortUp",
      cssDesc: "tablesorter-headerSortDown",
      cssHeader: "tablesorter-header",
      cssHeaderRow: "tablesorter-headerRow",
      cssIcon: "tablesorter-icon",
      cssChildRow: "tablesorter-childRow",
      cssInfoBlock: "tablesorter-infoOnly",
      cssProcessing: "tablesorter-processing",

      selectorHeaders: '> thead th, > thead td',
      selectorSort: "th, td",
      selectorRemove: "tr.remove-me",

      debug: false
  }).tablesorterPager({
      container: $(".pager"),
      ajaxUrl: null,
      ajaxProcessing: function(ajax) {
          if (ajax && ajax.hasOwnProperty('data')) {
              // return [ "data", "total_rows" ]; 
              return [ajax.data, ajax.total_rows];
          }
      },
      output: '{startRow} a {endRow} de {totalRows} filas',
      updateArrows: true,
      page: 0,
      size: 10,
      fixedHeight: false,
      removeRows: false,
      cssNext: '.next',
      cssPrev: '.prev',
      cssFirst: '.first',
      cssLast: '.last',
      cssGoto: '.gotoPage',
      cssPageDisplay: '.pagedisplay',
      cssPageSize: '.pagesize',
      cssDisabled: 'disabled'
  });

  $.extend($.tablesorter.themes.jui, {
      table: 'ui-widget ui-widget-content ui-corner-all', // table classes
      header: 'ui-widget-header ui-corner-all ui-state-default', // header classes
      icons: 'ui-icon', // icon class added to the <i> in the header
      sortNone: 'ui-icon-carat-2-n-s',
      sortAsc: 'ui-icon-carat-1-n',
      sortDesc: 'ui-icon-carat-1-s',
      active: 'ui-state-active', // applied when column is sorted
      hover: 'ui-state-hover', // hover class
      filterRow: '',
      even: 'ui-widget-content', // even row zebra striping
      odd: 'ui-state-default' // odd row zebra striping
  });

  $.tablesorter.filter.bindSearch( $('table'), $('.search'));
  $('select').change(function(){
  	$('.selectable').attr('data-column', $(this).val());
  	$.tablesorter.filter.bindSearch($('table'), $('.search'), false);
  });
})