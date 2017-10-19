<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones Boleta') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $boletum->serial],
                ['confirm' => __('Are you sure you want to delete # {0}?', $boletum->serial)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Boleta'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="boleta form large-9 medium-8 columns content">
    <?= $this->Form->create($boletum) ?>
    <fieldset>
        <legend><?= __('Edit Boletum') ?></legend>
        <?php
            echo $this->Form->control('fecha');
            echo $this->Form->control('garantia',array('type'=>'checkbox'));
            echo $this->Form->control('Usuario_cedula');
            echo $this->Form->control('Cliente_cedula');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
