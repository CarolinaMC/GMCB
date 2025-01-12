<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones Mantenimiento') ?></li>
        <li><?= $this->Html->link(__('Lista Mantenimiento'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mantenimiento form large-9 medium-8 columns content">
    <?= $this->Form->create($mantenimiento) ?>
    <fieldset>
        <legend><?= __('Agregar Mantenimiento') ?></legend>
        <?php
            echo $this->Form->control('prioridad',array('options'=>array(
                    'Urgente'=>'Urgente',
                    'Alta'=>'Alta',
                    'Media'=>'Media',
                    'Baja'=>'Baja'
                )));
            echo $this->Form->control('estado',array('options'=>array(
                    'En espera'=>'En espera',
                    'En espera por piezas'=>'En espera por piezas',
                    'Reparando'=>'Reparando',
                    'Finalizado'=>'Finalizado',
                    'Entregada'=>'Entregada'

                )));
            echo $this->Form->control('Bicicleta_serial1', array('type'=>'select', 'options'=>$Bicicleta_serial1));
            echo $this->Form->control('Boleta_serial', array('type'=>'select', 'options'=>$Boleta_serial));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
