<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bicicletum $bicicletum
 */
?>

<?php function tamaño($tam){
    if($tam==0){
        return '"12';
    }
    elseif ($tam==1) {
        return '"16';
    }
    elseif ($tam==2){ 
        return '"20';
    }
    elseif($tam==3){
        return '"24';
    }
    elseif($tam==4){
        return '"26';
    }
    elseif ($tam==4) {
        return '"27.5';
    }
    elseif ($tam==5) {
        return '"28';
    }
    elseif ($tam==6) {
        return '"29';
    }
    else{
        return '"700';
    }
}
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones Bicicleta') ?></li>
        <li><?= $this->Html->link(__('Editar Bicicleta'), ['action' => 'edit', $bicicletum->serial]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Bicicleta'), ['action' => 'delete', $bicicletum->serial], ['confirm' => __('Esta seguro de eliminar esta bicicleta? # {0}?', $bicicletum->serial)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Bicicleta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Bicicleta'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bicicleta view large-9 medium-8 columns content">
    <h3><?= h($bicicletum->serial) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($bicicletum->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($bicicletum->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tamaño') ?></th>
            <td><?= h(tamaño($bicicletum->tamaño)) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente Cedula') ?></th>
            <td><?= h($bicicletum->Cliente_cedula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serial') ?></th>
            <td><?= $this->Number->format($bicicletum->serial) ?></td>
        </tr>
    </table>
</div>
