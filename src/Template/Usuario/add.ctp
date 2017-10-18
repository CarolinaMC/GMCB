<?php
/**
 * @var \App\View\AppView $this
 */
?>
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones Usuario') ?></li>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuario form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
        <?php
            echo $this->Form->control('cedula',array('type'=>'text','minlength'=>'9','maxlength'=>'9', 'onkeypress'=>'return valida(event)'));
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellidos');
            $puestos =  array('Administrador','Dependiente','Mecanico');
            echo $this->form->input('puesto', array('type'=>'select','options'=>$puestos));
            echo $this->Form->control('email',array('type'=>'email'));
            echo $this->Form->control('password');
            echo $this->Form->control('telefono',array('type'=>'text','minlength'=>'8','maxlength'=>'8', 'onkeypress'=>'return valida(event)'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
