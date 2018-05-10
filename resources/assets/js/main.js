$(document).ready(function () {

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 120,
        max: new Date(),
        today: false,
        clear: false,
        close: 'Enviar',
        format: 'yyyy/mm/dd',
        monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
        showMonthsShort: undefined,
        showWeekdaysFull: undefined,
        labelMonthNext: 'Mes siguiente',
        labelMonthPrev: 'Mes anterior',
        labelMonthSelect: 'Seleccione el mes',
        labelYearSelect: 'Seleccione el año'
    });

    $('select').material_select();

    /* Fix text fields labels */
    Materialize.updateTextFields();
    $('#form_username').on('input', function (e) {
        var username = $(this).val();
        if (username.length > 9) {
            var cedula = username.substring(2);
            if (cedula > 80000000) {
                $(this).val('E-' + cedula);
            }
        }
    });

    $(".button-collapse").click(function () {
        $('#slide-out').toggleClass("hide-on-med-and-down");
        $('#slide-out').css('transform', "translateX(0)");
    });

    $("#radio_discapno").click(function(){
        $("#form_discap").prop('disabled', true);
    });

    $("#radio_discapsi").click(function(){
        $("#form_discap").prop('disabled', false);
    });

    $("#radio_penNo").click(function(){
        $("#form_pension").prop('disabled', true);
    });

    $("#radio_penSi").click(function(){
        $("#form_pension").prop('disabled', false);
    });


    //Configuration for field validation
    var options = {
        translation: {
            '0': {pattern: /\d/},
            '1': {pattern: /[1-9]/},
            '9': {pattern: /\d/, optional: true},
            '#': {pattern: /\d/, recursive: true},
            'C': {pattern: /V|v|E|e/, fallback: 'V'},
            'F': {pattern: /[\dA-Za-z]/}
        }
    };


    $('#form_username').mask('C-19999999', options);
    $('#form_cell').mask('(0000)-0000000', options);
    $('#form_hab').mask('(0000)-0000000', options);
    $('#form_ofic').mask('(0000)-0000000', options);
//    // Evitar los clicks repetidos.
//    $("a.btn").on('click', function () {
//        if (!$(this).hasClass('button-clicked')) {
//            $(this).addClass('button-clicked');
//            return true;
//        }
//        return false;
//    });


     // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
     //Modal Registro
});

$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });



//JS Tablas Pagos
(function(window, document, undefined) {

  var factory = function($, DataTable) {
    "use strict";

    $('.search-toggle').click(function() {
      if ($('.hiddensearch').css('display') == 'none')
        $('.hiddensearch').slideDown();
      else
        $('.hiddensearch').slideUp();
    });

    /* Set the defaults for DataTables initialisation */
    $.extend(true, DataTable.defaults, {
      dom: "<'hiddensearch'f'>" +
        "tr" +
        "<'table-footer'lip'>",
      renderer: 'material'
    });

    /* Default class modification */
    $.extend(DataTable.ext.classes, {
      sWrapper: "dataTables_wrapper",
      sFilterInput: "form-control input-sm",
      sLengthSelect: "form-control input-sm"
    });

    /* Bootstrap paging button renderer */
    DataTable.ext.renderer.pageButton.material = function(settings, host, idx, buttons, page, pages) {
      var api = new DataTable.Api(settings);
      var classes = settings.oClasses;
      var lang = settings.oLanguage.oPaginate;
      var btnDisplay, btnClass, counter = 0;

      var attach = function(container, buttons) {
        var i, ien, node, button;
        var clickHandler = function(e) {
          e.preventDefault();
          if (!$(e.currentTarget).hasClass('disabled')) {
            api.page(e.data.action).draw(false);
          }
        };

        for (i = 0, ien = buttons.length; i < ien; i++) {
          button = buttons[i];

          if ($.isArray(button)) {
            attach(container, button);
          } else {
            btnDisplay = '';
            btnClass = '';

            switch (button) {

              case 'first':
                btnDisplay = lang.sFirst;
                btnClass = button + (page > 0 ?
                  '' : ' disabled');
                break;

              case 'previous':
                btnDisplay = '<i class="material-icons">chevron_left</i>';
                btnClass = button + (page > 0 ?
                  '' : ' disabled');
                break;

              case 'next':
                btnDisplay = '<i class="material-icons">chevron_right</i>';
                btnClass = button + (page < pages - 1 ?
                  '' : ' disabled');
                break;

              case 'last':
                btnDisplay = lang.sLast;
                btnClass = button + (page < pages - 1 ?
                  '' : ' disabled');
                break;

            }

            if (btnDisplay) {
              node = $('<li>', {
                  'class': classes.sPageButton + ' ' + btnClass,
                  'id': idx === 0 && typeof button === 'string' ?
                    settings.sTableId + '_' + button : null
                })
                .append($('<a>', {
                    'href': '#',
                    'aria-controls': settings.sTableId,
                    'data-dt-idx': counter,
                    'tabindex': settings.iTabIndex
                  })
                  .html(btnDisplay)
                )
                .appendTo(container);

              settings.oApi._fnBindAction(
                node, {
                  action: button
                }, clickHandler
              );

              counter++;
            }
          }
        }
      };

      // IE9 throws an 'unknown error' if document.activeElement is used
      // inside an iframe or frame. 
      var activeEl;

      try {
        // Because this approach is destroying and recreating the paging
        // elements, focus is lost on the select button which is bad for
        // accessibility. So we want to restore focus once the draw has
        // completed
        activeEl = $(document.activeElement).data('dt-idx');
      } catch (e) {}

      attach(
        $(host).empty().html('<ul class="material-pagination"/>').children('ul'),
        buttons
      );

      if (activeEl) {
        $(host).find('[data-dt-idx=' + activeEl + ']').focus();
      }
    };

    /*
     * TableTools Bootstrap compatibility
     * Required TableTools 2.1+
     */
    if (DataTable.TableTools) {
      // Set the classes that TableTools uses to something suitable for Bootstrap
      $.extend(true, DataTable.TableTools.classes, {
        "container": "DTTT btn-group",
        "buttons": {
          "normal": "btn btn-default",
          "disabled": "disabled"
        },
        "collection": {
          "container": "DTTT_dropdown dropdown-menu",
          "buttons": {
            "normal": "",
            "disabled": "disabled"
          }
        },
        "print": {
          "info": "DTTT_print_info"
        },
        "select": {
          "row": "active"
        }
      });

      // Have the collection use a material compatible drop down
      $.extend(true, DataTable.TableTools.DEFAULTS.oTags, {
        "collection": {
          "container": "ul",
          "button": "li",
          "liner": "a"
        }
      });
    }

  }; // /factory

  // Define as an AMD module if possible
  if (typeof define === 'function' && define.amd) {
    define(['jquery', 'datatables'], factory);
  } else if (typeof exports === 'object') {
    // Node/CommonJS
    factory(require('jquery'), require('datatables'));
  } else if (jQuery) {
    // Otherwise simply initialise as normal, stopping multiple evaluation
    factory(jQuery, jQuery.fn.dataTable);
  }

})(window, document);

$(document).ready(function() {
  $('#datatable').dataTable({
    "oLanguage": {
      "sStripClasses": "",
      "sSearch": "",
      "sSearchPlaceholder": "Enter Keywords Here",
      "sInfo": "_START_ -_END_ of _TOTAL_",
      "sLengthMenu": '<span>Rows per page:</span><select class="browser-default">' +
        '<option value="10">10</option>' +
        '<option value="20">20</option>' +
        '<option value="30">30</option>' +
        '<option value="40">40</option>' +
        '<option value="50">50</option>' +
        '<option value="-1">All</option>' +
        '</select></div>'
    },
    bAutoWidth: false
  });
});

