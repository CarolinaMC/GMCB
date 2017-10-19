<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones Mantenimiento') ?></li>
        <li><?= $this->Html->link(__('Lista Mantenimiento'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mantenimiento form large-9 medium-8 columns content">
    <?= $this->Form->create($mantenimiento) ?>
    <fieldset>
        <legend><?= __('Agregar Mantenimiento') ?></legend>
        <?php
            echo $this->Form->control('prioridad');
            echo $this->Form->control('estado');
            echo $this->Form->control('Bicicleta', array('type'=>'select', 'options'=>$Bicicleta_serial1));
            echo $this->Form->control('Boleta', array('type'=>'select', 'options'=>$Boleta_serial));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
