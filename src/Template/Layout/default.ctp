<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bielles Meusiennes | Inscription</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?= $this->Html->css([
        'bootstrap.min',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'AdminLTE.min',
        '_all-skins.min'
        ]) ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="hold-transition skin-blue layout-top-nav">
    <?= $this->element('topbar');?>
    <div class="content-wrapper" style="background-color:#212121;">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <?= $this->Html->script([
        'jQuery-2.1.4.min',
        'bootstrap.min',
        'plugins/input-mask/jquery.inputmask',
        'plugins/input-mask/jquery.inputmask.date.extensions',
        'plugins/input-mask/jquery.inputmask.extensions'
    ]);?>
    <script>
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("[data-mask]").inputmask();
      });
    </script>
    <?= $this->fetch('script') ?>
</body>
</html>
