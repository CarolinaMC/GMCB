<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mantenimiento[]|\Cake\Collection\CollectionInterface $mantenimiento */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Mantenimiento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mantenimiento index large-9 medium-8 columns content">
    <h3><?= __('Mantenimiento') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('serial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Bicicleta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Boleta') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mantenimiento as $mantenimiento): ?>
            <tr>
                <td><?= $this->Number->format($mantenimiento->serial) ?></td>
                <td><?= h($mantenimiento->prioridad) ?></td>
                <td><?= h($mantenimiento->estado) ?></td>
                <td><?= $this->Number->format($mantenimiento->Bicicleta_serial1) ?></td>
                <td><?= $this->Number->format($mantenimiento->Boleta_serial) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $mantenimiento->serial]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $mantenimiento->serial]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $mantenimiento->serial], ['confirm' => __('Está seguro de borrar el Mantenimiento # {0}?', $mantenimiento->serial)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Previo')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} record(s) de {{count}} total')]) ?></p>
    </div>
</div>
