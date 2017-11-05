<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones Bicicleta') ?></li>
        <li><?= $this->Html->link(__('Lista Bicicletas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bicicleta form large-9 medium-8 columns content">
    <?= $this->Form->create($bicicletum) ?>
    <fieldset>
        <legend><?= __('Agregar Bicicleta') ?></legend>
        <?php
            $marca= array(
                ' '=>' ',
                'Canyon'=>'Canyon', 
                'BH'=>'BH',
                'Specialized'=> 'Specialized',
                'Radon'=>'Radon',
                'Stivens'=>'Stevens',
                'Scott'=>'Scott',
                'Santa Cruz'=>'Santa Cruz',
                'Conor'=>'Conor',
                'Otro'=>'Otro'
                );
            
            echo $this->Form->control('marca',array('type'=>'select', 'options'=>$marca));
            echo $this->Form->control('descripcion');
            $tamaño =  array('12','16','19','24','26','27.5','28','29','700');
            echo $this->form->control('tamaño', array('type'=>'select','options'=>$tamaño));
            echo $this->Form->control('Cliente_cedula',array('type'=>'select','options'=>$cliente_nombre));
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
