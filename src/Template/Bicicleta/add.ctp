<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bicicleta'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bicicleta form large-9 medium-8 columns content">
    <?= $this->Form->create($bicicletum) ?>
    <fieldset>
        <legend><?= __('Add Bicicletum') ?></legend>
        <?php
            echo $this->Form->control('marca');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('tamaño');
            echo $this->Form->control('Cliente_cedula',array('type'=>'select','options'=>$cliente_cedula));
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
