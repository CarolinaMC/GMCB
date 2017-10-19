<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Boletum[]|\Cake\Collection\CollectionInterface $boleta */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones Boleta') ?></li>
        <li><?= $this->Html->link(__('Nueva Boleta'), ['action' => 'add']) ?></li>
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
                <td><?php if($boletum->garantia){
                        ?>Sí<?php
                    }else{
                        ?>No<?php
                    }?></td>
                <td><?= h($boletum->Usuario_cedula) ?></td>
                <td><?= h($boletum->Cliente_cedula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $boletum->serial]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $boletum->serial]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $boletum->serial], ['confirm' => __('Está seguro de borrar la boleta # {0}?', $boletum->serial)]) ?>
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
