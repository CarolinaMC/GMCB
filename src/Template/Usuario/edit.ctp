<?php
/**
 * @var \App\View\AppView $this
 */
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones Usuario') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $usuario->cedula],
                ['confirm' => __('Estas seguro que quieres borrar este Usuario # {0}?', $usuario->nombre)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuario form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellidos');
            $puestos =  array('Administrador','Dependiente','Mecanico');
            echo $this->form->input('puesto', array('type'=>'select','options'=>$puestos));
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('telefono');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Editar')) ?>
    <?= $this->Form->end() ?>
</div>
