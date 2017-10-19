<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        CicloBarva
       
    </title>
    
   
    </div>



    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bs.css') ?>
    <?= $this->Html->css('red.css') ?>
    <?= $this->Html->css('home.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1 align="center"><b href=""><?= $this->Html->link("CicloBarva",['controller'=>'Usuario', 'action'=>'home']) ?></b></h1>

            </li>
            <li class="logo">
            <div id= "log" align="center"><?= $this->Html->image('logo3.png')?></div> 
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li>
                    <?= $this->Html->link("Usuario",['controller'=>'Usuario', 'action'=>'index'])?>
                </li>
                <li>
                    <?= $this->Html->link("Cliente", ['controller'=>'Cliente', 'action'=>'index'])?>
                </li>
                <li>
                    <?= $this->Html->link("Bicicleta", ['controller'=>'Bicicleta', 'action'=>'index'])?>
                </li>
                <li>
                    <?= $this->Html->link("Inventario de repuesto", ['controller'=>'Repuesto', 'action'=>'index'])?>
                </li>
                <li>
                    <?= $this->Html->link('Salir',['controller'=>'Usuario', 'action'=> 'logout', 'hidden'=> true])?>
                </li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
