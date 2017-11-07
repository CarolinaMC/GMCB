<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones bicicleta') ?></li>
        <li><?= $this->Html->link(__('Lista Bicicletas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bicicleta form large-9 medium-8 columns content">
    <?= $this->Form->create($bicicletum) ?>
    <fieldset>
        <legend><?= __('Editar Bicicleta') ?></legend>
        <?php
            echo $this->Form->control('marca');
            echo $this->Form->control('descripcion');
            $tamaño =  array('12','16','19','24','26','27.5','28','29','700');
            echo $this->form->input('tamaño', array('type'=>'select','options'=>$tamaño));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
