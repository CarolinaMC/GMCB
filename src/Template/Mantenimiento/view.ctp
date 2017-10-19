<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mantenimiento $mantenimiento */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Mantenimiento'), ['action' => 'edit', $mantenimiento->serial]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Mantenimiento'), ['action' => 'delete', $mantenimiento->serial], ['confirm' => __('Está seguro de eliminar el Mantenimiento # {0}?', $mantenimiento->serial)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Mantenimiento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Mantenimiento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mantenimiento view large-9 medium-8 columns content">
    <h3><?=  __('Mantenimiento #'), h($mantenimiento->serial) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Prioridad') ?></th>
            <td><?= h($mantenimiento->prioridad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($mantenimiento->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bicicleta #') ?></th>
            <td><?= $this->Number->format($mantenimiento->Bicicleta_serial1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Boleta #') ?></th>
            <td><?= $this->Number->format($mantenimiento->Boleta_serial) ?></td>
        </tr>
        </table>
</div>
