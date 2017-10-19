<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $marca */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Marca'), ['action' => 'edit', $marca->Marca]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Marca'), ['action' => 'delete', $marca->Marca], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->Marca)]) ?> </li>
        <li><?= $this->Html->link(__('List Marca'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marca'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bicicleta'), ['controller' => 'Bicicleta', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bicicletum'), ['controller' => 'Bicicleta', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="marca view large-9 medium-8 columns content">
    <h3><?= h($marca->idMarca) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($marca->Marca) ?></td>
        </tr>
        
    </table>
    <div class="related">
        <h4><?= __('Related Bicicleta') ?></h4>
        <?php if (!empty($marca->bicicleta)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Serial') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('TamaÃ±o') ?></th>
                <th scope="col"><?= __('Cliente Cedula') ?></th>
                <th scope="col"><?= __('Marca') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($marca->bicicleta as $bicicleta): ?>
            <tr>
                <td><?= h($bicicleta->serial) ?></td>
                <td><?= h($bicicleta->descripcion) ?></td>
                <td><?= h($bicicleta->tamaÃ±o) ?></td>
                <td><?= h($bicicleta->Cliente_cedula) ?></td>
                <td><?= h($bicicleta->marca) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bicicleta', 'action' => 'view', $bicicleta->serial]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bicicleta', 'action' => 'edit', $bicicleta->serial]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bicicleta', 'action' => 'delete', $bicicleta->serial], ['confirm' => __('Are you sure you want to delete # {0}?', $bicicleta->serial)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
