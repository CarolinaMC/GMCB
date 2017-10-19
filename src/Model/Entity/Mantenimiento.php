<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mantenimiento Entity
 *
 * @property int $serial
 * @property string $prioridad
 * @property string $estado
 * @property int $Bicicleta_serial1
 * @property int $Boleta_serial
 */class Mantenimiento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'prioridad' => true,
        'estado' => true,
        'Bicicleta_serial1' => true,
        'Boleta_serial' => true
    ];
}
