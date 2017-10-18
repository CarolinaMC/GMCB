<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones Repuesto') ?></li>
        <li><?= $this->Html->link(__('Editar Repuesto'), ['action' => 'edit', $repuesto->codigo]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Repuesto'), ['action' => 'delete', $repuesto->codigo], ['confirm' => __('Are you sure you want to delete # {0}?', $repuesto->codigo)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Repuesto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Repuesto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="repuesto view large-9 medium-8 columns content">
    <h3><?= h($repuesto->codigo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($repuesto->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td>₡<?= $this->Number->format($repuesto->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($repuesto->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($repuesto->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disponible') ?></th>
            <td><?php if($repuesto->disponible){
                        ?>Sí<?php
                    }else{
                        ?>No<?php
                    }?></td>
        </tr>
    </table>
</div>
