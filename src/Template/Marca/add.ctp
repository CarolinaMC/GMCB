<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Marca'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bicicleta'), ['controller' => 'Bicicleta', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bicicletum'), ['controller' => 'Bicicleta', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marca form large-9 medium-8 columns content">
    <?= $this->Form->create($marca) ?>
    <fieldset>
        <legend><?= __('Add Marca') ?></legend>
        <?php
            echo $this->Form->control('Marca');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
