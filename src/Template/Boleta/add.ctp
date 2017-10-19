<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones Boleta') ?></li>
        <li><?= $this->Html->link(__('Lista Boleta'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="boleta form large-9 medium-8 columns content">
    <?= $this->Form->create($boletum) ?>
    <fieldset>
        <legend><?= __('Agregar Boleta') ?></legend>
        <?php
            echo $this->Form->control('fecha');
            echo $this->Form->control('garantia',array('type'=>'checkbox'));
            echo $this->Form->control('Usuario_cedula', array('type'=>'select', 'options'=>$Usuario_cedula));
            echo $this->Form->control('Cliente_cedula', array('type'=>'select', 'options'=>$Cliente_cedula));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
