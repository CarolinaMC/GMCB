<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MantenimientoFixture
 *
 */
class MantenimientoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'mantenimiento';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'serial' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'prioridad' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'estado' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Bicicleta_serial1' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Boleta_serial' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Mantenimiento_Bicicleta1_idx' => ['type' => 'index', 'columns' => ['Bicicleta_serial1'], 'length' => []],
            'fk_Mantenimiento_Boleta1_idx' => ['type' => 'index', 'columns' => ['Boleta_serial'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['serial'], 'length' => []],
            'fk_Mantenimiento_Bicicleta1' => ['type' => 'foreign', 'columns' => ['Bicicleta_serial1'], 'references' => ['bicicleta', 'serial'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Mantenimiento_Boleta1' => ['type' => 'foreign', 'columns' => ['Boleta_serial'], 'references' => ['boleta', 'serial'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'prioridad' => 'Lorem ipsum dolor sit amet',
            'estado' => 'Lorem ipsum dolor sit amet',
            'Bicicleta_serial1' => 1,
            'Boleta_serial' => 1
        ],
    ];
}
