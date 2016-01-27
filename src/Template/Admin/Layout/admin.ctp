<!DOCTYPE html>
<html>
  <head>
      <?= $this->Html->charset() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
          <?= $this->fetch('title') ?>
      </title>
      <?= $this->Html->meta('icon') ?>
      <?= $this->fetch('meta') ?>
      <?= $this->Html->css([
        'admin',
        'bootstrap.min',
        'font-awesome.min'
        ]); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrapper">
    <?= $this->element('Admin/navbar'); ?>
    <?= $this->Flash->render() ?>
    <div id="page-wrapper">
      <div class="container-fluid">
        <?= $this->fetch('content'); ?>
      </div>
    </div>
    <?= $this->element('Admin/footer');?>
    <?= $this->Html->script([
        'jquery.min',
        'bootstrap.min'
        ]); ?>
  </body>
</html>
