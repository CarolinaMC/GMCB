<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BoletaFixture
 *
 */
class BoletaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'boleta';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'serial' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'garantia' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Usuario_cedula' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Cliente_cedula' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_Boleta_Usuario1_idx' => ['type' => 'index', 'columns' => ['Usuario_cedula'], 'length' => []],
            'fk_Boleta_Cliente1_idx' => ['type' => 'index', 'columns' => ['Cliente_cedula'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['serial'], 'length' => []],
            'serial_UNIQUE' => ['type' => 'unique', 'columns' => ['serial'], 'length' => []],
            'fk_Boleta_Cliente1' => ['type' => 'foreign', 'columns' => ['Cliente_cedula'], 'references' => ['cliente', 'cedula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Boleta_Usuario1' => ['type' => 'foreign', 'columns' => ['Usuario_cedula'], 'references' => ['usuario', 'cedula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'serial' => 1,
            'fecha' => '2017-10-19',
            'garantia' => 'Lorem ipsum dolor sit amet',
            'Usuario_cedula' => 'Lorem ipsum dolor sit amet',
            'Cliente_cedula' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
