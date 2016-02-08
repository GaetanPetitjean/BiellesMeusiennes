<section class="content-header">
    <h1>Liste des évènements</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3>Liste des évènements créés</h3>
                </div>
                <div class="box-body">
                    <div id="admin-events-index_box" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="admin-events-index_table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th><?= $this->Paginator->sort('id') ?></th>
                                            <th><?= $this->Paginator->sort('name') ?></th>
                                            <th><?= $this->Paginator->sort('lieu') ?></th>
                                            <th><?= $this->Paginator->sort('start') ?></th>
                                            <th><?= $this->Paginator->sort('end') ?></th>
                                            <th><?= $this->Paginator->sort('created') ?></th>
                                            <th class="actions"><?= __('Actions') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($events as $event): ?>
                                        <tr role="row">
                                            <td><?= $this->Number->format($event->id) ?></td>
                                            <td><?= h($event->name) ?></td>
                                            <td><?= h($event->lieu) ?></td>
                                            <td><?= h($event->start) ?></td>
                                            <td><?= h($event->end) ?></td>
                                            <td><?= h($event->created) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('<i class="fa fa-eye"></i>'), ['action' => 'view', $event->id, 'prefix' => 'admin'],['escape' => false]) ?>
                                                <?= $this->Html->link(__('<i class="fa fa-pencil"></i>'), ['action' => 'edit', $event->id, 'prefix' => 'admin'],['escape' => false, 'style' => 'color: violet; margin-left:15px; ']) ?>
                                                <?= $this->Form->postLink(__('<i class="fa fa-trash"></i>'), ['action' => 'delete', $event->id, 'prefix' => 'admin'], ['escape' => false,'confirm' => __("Etes vous sur de vouloir supprimer l'évènement  # {0}?", $event->id), 'style' => 'color: red; margin-left:15px;']) ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
