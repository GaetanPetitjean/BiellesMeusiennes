<section class="content-header">
    <h1>Créer un nouvel évènement</h1>
</section>
<section class="content">

    <div class="row">
        <div class="col-sm-12">
            <div class="box box-info">
                <div class="box-header with-border">

                </div>
                <div class="box-body">
                    <?= $this->Form->create($event, ['enctype' => 'multipart/form-data']) ?>
                    <div class="form-group">
                      <?= $this->Form->input('name', ['class' => 'form-control']);?>
                    </div>
                    <div class="form-group">
                      <?= $this->Form->input('lieu', ['class' => 'form-control']);?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <?= $this->Form->input('start', ['class' => 'form-control', 'data-inputmask'=> "'alias': 'dd/mm/yyyy'", 'data-mask' => '', 'type' => 'text', 'label' => false]);?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <?= $this->Form->input('end', ['class' => 'form-control', 'data-inputmask'=> "'alias': 'dd/mm/yyyy'", 'data-mask' => '', 'type' => 'text', 'label' => false]);?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <?= $this->Form->input('content', ['class' => 'form-control']);?>
                    </div>
                    <div class="form-group">
                      <?= $this->Form->input('thumb_file', ['type' => 'file']) ?>
                    </div>
                    <div class="box-footer">
                        <?= $this->Form->button(__('Enregistrer'),['class' => 'btn btn-info btn-block']) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>
