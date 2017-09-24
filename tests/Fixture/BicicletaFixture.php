<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BicicletaFixture
 *
 */
class BicicletaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'bicicleta';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'serial' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'marca' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tamaño' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Cliente_cedula' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_Bicicleta_Cliente1_idx' => ['type' => 'index', 'columns' => ['Cliente_cedula'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['serial', 'Cliente_cedula'], 'length' => []],
            'serial_UNIQUE' => ['type' => 'unique', 'columns' => ['serial'], 'length' => []],
            'fk_Bicicleta_Cliente1' => ['type' => 'foreign', 'columns' => ['Cliente_cedula'], 'references' => ['cliente', 'cedula'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'marca' => 'Lorem ipsum dolor sit amet',
            'descripcion' => 'Lorem ipsum dolor sit amet',
            'tamaño' => 'Lorem ipsum dolor sit amet',
            'Cliente_cedula' => '967b0450-4461-4a33-8da4-d82d7eaf2bb5'
        ],
    ];
}
