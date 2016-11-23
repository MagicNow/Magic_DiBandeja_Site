$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('textarea').wysihtml5();
    $('#datatables').DataTable({
          "paging": true,
          "language": {
            "sSearch": "Buscarr",
            "oPaginate":{
              "sNext":"Próximo",
              "sPrevious":"Anterior",
            },
            "sInfo":"Mostrando _START_ to _END_ de _TOTAL_ registros",
            "sEmptyTable":"Nenhum registro",
            "sInfoEmpty":"Mostrando 0 to 0 de 0 registros",
          },
          
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "order": [[ 0, "desc" ]]
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        console.log($(e.relatedTarget).attr('href'))
        var target = $(e.relatedTarget).attr('href');
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).attr('href'));
       
    });
    $(".select2").select2();

    $('#sazonalidade_inicial,#sazonalidade_final').datepicker({
          autoclose: true,
          language: 'pt-BR',
          format: 'dd/mm/yyyy',

    });


});