<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boletum $boletum */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones Boleta') ?></li>
        <li><?= $this->Html->link(__('Editar Boleta'), ['action' => 'edit', $boletum->serial]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Boleta'), ['action' => 'delete', $boletum->serial], ['confirm' => __(' Está seguro de borrar la Boleta# {0}?', $boletum->serial)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Boleta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Boleta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="boleta view large-9 medium-8 columns content">
    <h3><?= h($boletum->serial) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Garantia') ?></th>
            <td><?= h($boletum->garantia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Cedula') ?></th>
            <td><?= h($boletum->Usuario_cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente Cedula') ?></th>
            <td><?= h($boletum->Cliente_cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serial') ?></th>
            <td><?= $this->Number->format($boletum->serial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($boletum->fecha) ?></td>
        </tr>
    </table>
</div>
