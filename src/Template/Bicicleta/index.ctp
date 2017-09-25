<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bicicletum[]|\Cake\Collection\CollectionInterface $bicicleta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bicicletum'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bicicleta index large-9 medium-8 columns content">
    <h3><?= __('Bicicleta') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('serial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tamaño') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cliente_cedula') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bicicleta as $bicicletum): ?>
            <tr>
                <td><?= $this->Number->format($bicicletum->serial) ?></td>
                <td><?= h($bicicletum->marca) ?></td>
                <td><?= h($bicicletum->descripcion) ?></td>
                <td><?= h($bicicletum->tamaño) ?></td>
                <td><?= h($bicicletum->Cliente_cedula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bicicletum->serial]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bicicletum->serial]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bicicletum->serial], ['confirm' => __('Are you sure you want to delete # {0}?', $bicicletum->serial)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
