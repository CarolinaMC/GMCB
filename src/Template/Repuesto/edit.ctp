<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones repuesto') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $repuesto->codigo],
                ['confirm' => __('Estas seguro que quieres borrar esta respuesto # {0}?', $repuesto->codigo)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Repuestos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="repuesto form large-9 medium-8 columns content">
    <?= $this->Form->create($repuesto) ?>
    <fieldset>
        <legend><?= __('Editar Bicicleta') ?></legend>
        <?php
            echo $this->Form->control('precio');
            echo $this->Form->control('disponible',array('type'=>'checkbox'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
