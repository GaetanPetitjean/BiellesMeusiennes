<!DOCTYPE html>
<html>
  <head>
      <?= $this->Html->charset() ?>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <title>
          <?= $this->fetch('title') ?>
      </title>
      <?= $this->Html->meta('icon') ?>
      <?= $this->fetch('meta') ?>
      <?= $this->Html->css([
        'bootstrap.min',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        '/js/plugins/datatables/dataTables.bootstrap',
        'AdminLTE.min.css',
        '_all-skins.min.css'
        ]); ?>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <?= $this->fetch('css'); ?>

  </head>
  <body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        <?= $this->element('Admin/topbar'); ?>
        <?= $this->element('Admin/navbar'); ?>
        <div class="content-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content'); ?>
        </div>
    </div>
    <?= $this->element('Admin/footer');?>
    <?= $this->Html->script([
        'jQuery-2.1.4.min',
        'bootstrap.min',
        'plugins/select2/select2.full.min',
        'plugins/input-mask/jquery.inputmask',
        'plugins/input-mask/jquery.inputmask.date.extensions',
        'plugins/input-mask/jquery.inputmask.extensions',
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',
        'plugins/daterangepicker/daterangepicker.js',
        'plugins/colorpicker/bootstrap-colorpicker.min',
        'plugins/timepicker/bootstrap-timepicker.min',
        'plugins/slimScroll/jquery.slimscroll.min',
        'plugins/iCheck/icheck.min',
        'plugins/fastclick/fastclick.min',
        'plugins/datatables/jquery.dataTables.min.js',
        'plugins/datatables/dataTables.bootstrap.min.js',
        'app.min',
        'demo'
        ]); ?>
    <script>
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("[data-mask]").inputmask();

        $('#event-inscription_globals').DataTable({
            "paging": true,
            "lengthChange": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            columnDefs: [
                { targets: 5, "searchable": false, 'orderable': false }
            ]
        });

        $('#event-inscription_valids').DataTable({
          "paging": true,
          "lengthChange": false,
          columnDefs: [
              { targets: 5, "searchable": false, 'orderable': false }
          ],
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        $('#event-inscription_waitings').DataTable({
          "paging": true,
          "lengthChange": false,
          columnDefs: [
              { targets: 5, "searchable": false, 'orderable': false }
          ],
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        $('#event-inscription_refused').DataTable({
          "paging": true,
          "lengthChange": false,
          columnDefs: [
              { targets: 5, "searchable": false, 'orderable': false }
          ],
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        $('.btn-validation').on('click', function(e){
            e.preventDefault();
            var url = $(this).data('url');
            var data = {
                owner: $(this).data('owner'),
                event: $(this).data('event'),
                vehicle: $(this).data('vehicle')
            };
            var jqxhr = $.post( url, data)
            .done(function() {
                console.log( "second success" );
            })
            .fail(function() {
                console.log( "error" );
            })
            .always(function() {
                console.log( "finished" );
            });
        })

      });
    </script>
    <?= $this->fetch('script'); ?>
  </body>
</html>
