<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones Respuesto') ?></li>
        <li><?= $this->Html->link(__('Lista Respuestos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="respesto form large-9 medium-8 columns content">
    <?= $this->Form->create($repuesto) ?>
    <fieldset>
        <legend><?= __('Agregar Respuesto') ?></legend>
        <?php
            echo $this->Form->control('codigo');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('precio');
            echo $this->Form->control('marca');
            echo $this->Form->control('categoria');
            echo $this->Form->control('disponible',array('type'=>'checkbox'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
