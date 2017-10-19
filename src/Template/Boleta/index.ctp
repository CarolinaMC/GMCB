<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boletum[]|\Cake\Collection\CollectionInterface $boleta */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Boletum'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="boleta index large-9 medium-8 columns content">
    <h3><?= __('Boleta') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('serial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('garantia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Usuario_cedula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cliente_cedula') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($boleta as $boletum): ?>
            <tr>
                <td><?= $this->Number->format($boletum->serial) ?></td>
                <td><?= h($boletum->fecha) ?></td>
                <td><?= h($boletum->garantia) ?></td>
                <td><?= h($boletum->Usuario_cedula) ?></td>
                <td><?= h($boletum->Cliente_cedula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $boletum->serial]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $boletum->serial]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $boletum->serial], ['confirm' => __('Are you sure you want to delete # {0}?', $boletum->serial)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
