<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehicle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['controller' => 'Owners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Owner'), ['controller' => 'Owners', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vehicles form large-9 medium-8 columns content">
    <?= $this->Form->create($vehicle) ?>
    <fieldset>
        <legend><?= __('Edit Vehicle') ?></legend>
        <?php
            echo $this->Form->input('owner_id', ['options' => $owners]);
            echo $this->Form->input('marque');
            echo $this->Form->input('model');
            echo $this->Form->input('model_info');
            echo $this->Form->input('date_circu');
            echo $this->Form->input('imat');
            echo $this->Form->input('infos');
            echo $this->Form->input('is_valid');
            echo $this->Form->input('events._ids', ['options' => $events]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
