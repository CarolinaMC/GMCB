<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bicicletum Entity
 *
 * @property int $serial
 * @property string $marca
 * @property string $descripcion
 * @property string $tamaño
 * @property string $Cliente_cedula
 */
class Bicicletum extends Entity
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
        'marca' => true,
        'descripcion' => true,
        'tamaño' => true
    ];
}
