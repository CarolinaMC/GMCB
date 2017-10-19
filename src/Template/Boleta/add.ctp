<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Boleta'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="boleta form large-9 medium-8 columns content">
    <?= $this->Form->create($boletum) ?>
    <fieldset>
        <legend><?= __('Add Boletum') ?></legend>
        <?php
            echo $this->Form->control('fecha');
            echo $this->Form->control('garantia');
            echo $this->Form->control('Usuario_cedula', array('type'=>'select', 'options'=>$Usuario_cedula));
            echo $this->Form->control('Cliente_cedula', array('type'=>'select', 'options'=>$Cliente_cedula));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
