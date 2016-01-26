<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Owners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="owners form large-9 medium-8 columns content">
    <?= $this->Form->create($owner) ?>
    <fieldset>
        <legend><?= __('Add Owner') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('lastname');
            echo $this->Form->input('type');
            echo $this->Form->input('email');
            echo $this->Form->input('adress1');
            echo $this->Form->input('adress2');
            echo $this->Form->input('adress3');
            echo $this->Form->input('city');
            echo $this->Form->input('cp');
            echo $this->Form->input('cedex');
            echo $this->Form->input('country');
            echo $this->Form->input('events._ids', ['options' => $events]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
