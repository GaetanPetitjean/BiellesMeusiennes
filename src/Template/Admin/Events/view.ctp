<section class="content-header">
    <h1>Visualiser un évènement</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <?= $this->Html->image($event->thumb, ['class' => 'profile-user-img img-responsive img-circle', 'alt' => 'User profile picture']);?>
                  <h3 class="profile-username text-center"><?= h($event->name) ?></h3>
                  <p class="text-muted text-center"><?= h($event->lieu) ?></p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Enregistrés total</b> <a class="pull-right"><?= (!empty($event->owners)) ? count($event->owners) : "0"; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Enregistrés validés</b> <a class="pull-right"><?= (!empty($event->owners)) ? count($event->owners) : "0"; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Enregistrés non validés</b> <a class="pull-right"><?= (!empty($event->owners)) ? count($event->owners) : "0"; ?></a>
                    </li>
                  </ul>

                  <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'inscription', 'prefix' => false, $event->id]); ?>" class="btn btn-primary btn-block"><b>Voir l'évènement</b></a>
                  <a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'view', 'prefix' => false, $event->id]); ?>" class="btn btn-danger btn-block"><b>Editer l'évènement</b></a>
                </div><!-- /.box-body -->
              </div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Infos</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <strong><i class="fa fa-calendar margin-r-5"></i>Dates</strong>
                  <p class="text-muted">
                    Date de début: <?= h($event->start) ?>
                  </p>
                  <p class="text-muted">
                    Date de fin: <?= h($event->end) ?>
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
        <div class="col-md-9">
            <div class="box">
                <div class="box-body">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#global" data-toggle="tab">Enregistrés (<?= count($list);?>)</a></li>
                          <li><a href="#valid" data-toggle="tab">Validés (<?= count($valids);?>)</a></li>
                          <li><a href="#waiting" data-toggle="tab">En attente (<?= count($waiting);?>)</a></li>
                          <li><a href="#refused" data-toggle="tab">Refusés (<?= count($refused);?>)</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="active tab-pane" id="global">
                            <h4>Liste des inscriptions globale</h4>
                            <?php if (!empty($list)): ?>

                            <table class="table table-bordered table-striped " id="event-inscription_globals">
                                <thead>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Firstname') ?></th>
                                        <th><?= __('Lastname') ?></th>
                                        <th><?= __('Email') ?></th>
                                        <th><?= __("Date d'inscription") ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list as $owners): ?>
                                    <tr>
                                        <td><?= h($owners->owner->id) ?></td>
                                        <td><?= h($owners->owner->firstname) ?></td>
                                        <td><?= h($owners->owner->lastname) ?></td>
                                        <td><?= h($owners->owner->email) ?></td>
                                        <td><?= h($owners->created) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Owners', 'action' => 'view', $owners->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Owners', 'action' => 'edit', $owners->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Owners', 'action' => 'delete', $owners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owners->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else : ?>
                            <p>
                                Aucun enregistrement !
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="active tab-pane" id="valid">
                            <h4>Liste des inscriptions validées</h4>
                            <?php if (!empty($valids)): ?>
                            <table class=" table table-bordered table-striped" id="event-inscription_valids">
                                <thead>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Firstname') ?></th>
                                        <th><?= __('Lastname') ?></th>
                                        <th><?= __('Email') ?></th>
                                        <th><?= __("Date d'inscription") ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($valids as $owners): ?>
                                    <tr>
                                        <td><?= h($owners->owner->id) ?></td>
                                        <td><?= h($owners->owner->firstname) ?></td>
                                        <td><?= h($owners->owner->lastname) ?></td>
                                        <td><?= h($owners->owner->email) ?></td>
                                        <td><?= h($owners->created) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Owners', 'action' => 'view', $owners->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Owners', 'action' => 'edit', $owners->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Owners', 'action' => 'delete', $owners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owners->id)]) ?>

                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else : ?>
                            <p>
                                Aucun enregistrement !
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="active tab-pane" id="waiting">
                            <h4>Liste des inscriptions en attente</h4>

                            <?php if (!empty($waiting)): ?>
                            <table class=" table table-bordered table-striped" id="event-inscription_waitings">
                                <thead>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Firstname') ?></th>
                                        <th><?= __('Lastname') ?></th>
                                        <th><?= __('Email') ?></th>
                                        <th><?= __("Date d'inscription") ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($waiting as $owners): ?>
                                    <tr>
                                        <td><?= h($owners->owner->id) ?></td>
                                        <td><?= h($owners->owner->firstname) ?></td>
                                        <td><?= h($owners->owner->lastname) ?></td>
                                        <td><?= h($owners->owner->email) ?></td>
                                        <td><?= h($owners->created) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Owners', 'action' => 'view', $owners->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Owners', 'action' => 'edit', $owners->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Owners', 'action' => 'delete', $owners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owners->id)]) ?>
                                            <?= $this->Html->link(__('Valider'),
                                                [
                                                    '_name' => 'event-validation',
                                                    'owner' => $owners->owner_id,
                                                    'event' => $owners->event_id,
                                                    'vehicle' => $owners->vehicle_id,
                                                    'id' => $owners->id
                                                ], [
                                                    'class' => 'btn btn-primary'
                                                ]
                                            ) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else : ?>
                            <p>
                                Aucun enregistrement !
                            </p>
                            <?php endif; ?>
                        </div>
                        <div class="active tab-pane" id="refused">
                            <h4>Liste des inscriptions refusée</h4>

                            <?php if (!empty($refused)): ?>
                            <table class=" table table-bordered table-striped" id="event-inscription_refused">
                                <thead>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('Firstname') ?></th>
                                        <th><?= __('Lastname') ?></th>
                                        <th><?= __('Email') ?></th>
                                        <th><?= __("Date d'inscription") ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($refused as $owners): ?>
                                    <tr>
                                        <td><?= h($owners->owner->id) ?></td>
                                        <td><?= h($owners->owner->firstname) ?></td>
                                        <td><?= h($owners->owner->lastname) ?></td>
                                        <td><?= h($owners->owner->email) ?></td>
                                        <td><?= h($owners->created) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Owners', 'action' => 'view', $owners->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Owners', 'action' => 'edit', $owners->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Owners', 'action' => 'delete', $owners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owners->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else : ?>
                                <p>
                                    Aucun enregistrement !
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
