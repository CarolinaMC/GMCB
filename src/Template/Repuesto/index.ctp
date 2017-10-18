<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $repuesto */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones de repuesto') ?></li>
        <li><?= $this->Html->link(__('Nuevo Repuesto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="repuesto index large-9 medium-8 columns content">
    <h3><?= __('Repuesto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disponible') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($repuesto as $repuesto): ?>
            <tr>
                <td><?= h($repuesto->codigo) ?></td>
                <td><?= h($repuesto->descripcion) ?></td>
                <td>₡<?= $this->Number->format($repuesto->precio) ?></td>
                <td><?= h($repuesto->marca) ?></td>
                <td><?= h($repuesto->categoria) ?></td>
                <td><?php if($repuesto->disponible){
                        ?>Sí<?php
                    }else{
                        ?>No<?php
                    }?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $repuesto->codigo]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $repuesto->codigo]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $repuesto->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $repuesto->codigo)]) ?>
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
