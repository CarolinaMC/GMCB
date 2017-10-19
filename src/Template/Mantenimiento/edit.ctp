<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mantenimiento->serial],
                ['confirm' => __('Está seguro de borrar el Mantenimiento # {0}?', $mantenimiento->serial)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Mantenimiento'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mantenimiento form large-9 medium-8 columns content">
    <?= $this->Form->create($mantenimiento) ?>
    <fieldset>
        <legend><?= __('Editar Mantenimiento') ?></legend>
        <?php
            //echo $this->Form->control('prioridad');
            echo $this->Form->control('estado',array('options'=>array(
                    'Entregada'=>'Entregada',
                    'Finalizado'=>'Finalizado',
                    'Reparando'=>'Reparando',
                    'En espera'=>'En espera',
                    'En espera por Piezas'=>'En espera por Piezas'

                )));
            //echo $this->Form->control('Bicicleta_serial1');
            //echo $this->Form->control('Boleta_serial');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
