<div class="container">
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border" style="padding:0;">
                <?= $this->Html->image($event->thumb, ['class' => 'img-responsive']); ?>
                <h1 style="text-align:center;"><?= $event->name;?></h1>
            </div>
            <div class="box-body">
                <div class="col-xs-12 col-md-3">
                    <div class="box box-primary">
                      <div class="box-header with-border">
                        <h3 class="box-title">Infos</h3>
                      </div><!-- /.box-header -->
                      <div class="box-body">
                        <strong><i class="fa fa-calendar margin-r-5"></i>Dates</strong>
                        <p class="text-muted">
                          Date de début: <strong> <?= h($event->start) ?></strong>
                        </p>
                        <p class="text-muted">
                          Date de fin: <strong><?= h($event->end) ?></strong>
                        </p>
                        <hr>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Lieu</strong>
                        <p class="text-muted"><?= h($event->lieu) ?></p>
                        <hr>
                        <strong><i class="fa fa-pencil margin-r-5"></i> Infos relatives</strong>
                        <p class="text-muted"><?= $event->content ?></p>
                      </div><!-- /.box-body -->
                    </div>
                </div>
                <div class="col-xs-12 col-md-9">
                    <h3>Vous inscrire</h3>
                    <div class="callout callout-danger">
                      <h4>Attention!</h4>
                      <p>
                          Vous ne pouvez enregistrer qu'un seul véhicule avec la même adresse email !
                      </p>
                      <p>
                          Pour vous inscrire, il vous suffit de remplir ce formulaire, votre demande sera traité dans les plus bref délais et un email de confirmation vous sera envoyé.
                      </p>
                    </div>
                    <?= $this->Form->create($event) ?>
                    <h4>Renseignements personnels</h4>
                    <div class="col-xs-2" style="padding-left:0;">
                        <label for="Owners.type">Titre</label>
                        <?= $this->Form->select('Owners.type', ['Mr', 'Mme', 'Mlle'], [ 'class' => 'form-control'] ); ?>
                    </div>
                    <div class="col-xs-5">
                    <?= $this->Form->input('Owners.firstname', ['class' => 'form-control'] ); ?>
                    </div>
                    <div class="col-xs-5"  style="padding-right:0;">
                    <?= $this->Form->input('Owners.lastname', ['class' => 'form-control'] ); ?>
                    </div>

                    <?= $this->Form->input('Owners.email', ['type' => 'email','class' => 'form-control'] ); ?>
                    <?= $this->Form->input('Owners.adress1', ['class' => 'form-control'] ); ?>
                    <?= $this->Form->input('Owners.adress2', ['class' => 'form-control'] ); ?>
                    <?= $this->Form->input('Owners.adress3', ['class' => 'form-control'] ); ?>
                    <?= $this->Form->input('Owners.city', ['class' => 'form-control'] ); ?>
                    <div class="col-xs-6" style="padding-left:0;">
                        <?= $this->Form->input('Owners.cp', ['type' => 'number', 'class' => 'form-control'] ); ?>
                    </div>
                    <div class="col-xs-6" style="padding-right:0;">
                        <?= $this->Form->input('Owners.cedex', ['class' => 'form-control'] ); ?>
                    </div>
                    <?= $this->Form->input('Owners.country', ['class' => 'form-control'] ); ?>
                    <hr>
                    <h4>Renseignements du véhicule</h4>
                    <?= $this->Form->input('Vehicles.marque', ['class' => 'form-control'] );?>
                    <?= $this->Form->input('Vehicles.model', ['class' => 'form-control'] );?>
                    <?= $this->Form->input('Vehicles.model_info', ['class' => 'form-control'] );?>
                    <label for="Vehicles.date_circu">Date d'immatriculation</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <?= $this->Form->input('Vehicles.date_circu', ['class' => 'form-control', 'data-inputmask'=> "'alias': 'dd/mm/yyyy'", 'data-mask' => '', 'type' => 'text', 'label' => false]);?>
                    </div>
                    <?= $this->Form->input('Vehicles.imat', ['class' => 'form-control'] );?>
                    <?= $this->Form->input('Vehicles.infos', ['type' => 'textarea', 'class' => 'form-control'] );?>
                    <?= $this->Form->button(__("S'inscrire"), ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:20px;']) ?>
                    <?= $this->Form->end();?>
                </div>
            </div>
        </div>
    </section>
</div>
