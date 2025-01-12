<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $marca */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Marca'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bicicleta'), ['controller' => 'Bicicleta', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bicicletum'), ['controller' => 'Bicicleta', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marca index large-9 medium-8 columns content">
    <h3><?= __('Marca') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idMarca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Marca') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($marca as $marca): ?>
            <tr>
                <td><?= $this->Number->format($marca->Marca) ?></td>
                <td><?= h($marca->Marca) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $marca->Marca]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $marca->Marca]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $marca->Marca], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->Marca)]) ?>
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
