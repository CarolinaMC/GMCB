<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Auth\AbstractPasswordHasher;
/**
 * Usuario Entity
 *
 * @property string $cedula
 * @property string $nombre
 * @property string $apellidos
 * @property string $puesto
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $telefono
 */
class Usuario extends Entity
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
        'cedula' => true,
        'nombre' => true,
        'apellidos' => true,
        'puesto' => true,
        'email' => true,
        'password' => true,
        'telefono' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     
    protected $_hidden = [
        'password'
    ];*/

    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);

    }
}
