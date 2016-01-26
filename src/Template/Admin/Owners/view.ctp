<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Owner'), ['action' => 'edit', $owner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Owner'), ['action' => 'delete', $owner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $owner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Owners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Owner'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="owners view large-9 medium-8 columns content">
    <h3><?= h($owner->lastname) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($owner->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($owner->lastname) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($owner->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($owner->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Adress1') ?></th>
            <td><?= h($owner->adress1) ?></td>
        </tr>
        <tr>
            <th><?= __('Adress2') ?></th>
            <td><?= h($owner->adress2) ?></td>
        </tr>
        <tr>
            <th><?= __('Adress3') ?></th>
            <td><?= h($owner->adress3) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($owner->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedex') ?></th>
            <td><?= h($owner->cedex) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($owner->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($owner->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Cp') ?></th>
            <td><?= $this->Number->format($owner->cp) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($owner->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($owner->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vehicles') ?></h4>
        <?php if (!empty($owner->vehicles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Owner Id') ?></th>
                <th><?= __('Marque') ?></th>
                <th><?= __('Model') ?></th>
                <th><?= __('Model Info') ?></th>
                <th><?= __('Date Circu') ?></th>
                <th><?= __('Imat') ?></th>
                <th><?= __('Infos') ?></th>
                <th><?= __('Is Valid') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->vehicles as $vehicles): ?>
            <tr>
                <td><?= h($vehicles->id) ?></td>
                <td><?= h($vehicles->owner_id) ?></td>
                <td><?= h($vehicles->marque) ?></td>
                <td><?= h($vehicles->model) ?></td>
                <td><?= h($vehicles->model_info) ?></td>
                <td><?= h($vehicles->date_circu) ?></td>
                <td><?= h($vehicles->imat) ?></td>
                <td><?= h($vehicles->infos) ?></td>
                <td><?= h($vehicles->is_valid) ?></td>
                <td><?= h($vehicles->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vehicles', 'action' => 'view', $vehicles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vehicles', 'action' => 'edit', $vehicles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vehicles', 'action' => 'delete', $vehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($owner->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Lieu') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($owner->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->lieu) ?></td>
                <td><?= h($events->start) ?></td>
                <td><?= h($events->end) ?></td>
                <td><?= h($events->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
