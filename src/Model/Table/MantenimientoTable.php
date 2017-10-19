<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mantenimiento Model
 *
 * @method \App\Model\Entity\Mantenimiento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mantenimiento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mantenimiento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mantenimiento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mantenimiento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mantenimiento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mantenimiento findOrCreate($search, callable $callback = null, $options = [])
 */class MantenimientoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mantenimiento');
        $this->setDisplayField('serial');
        $this->setPrimaryKey('serial');
        $this->belongsTo('Bicicleta',['foreingKey'=>'Bicicleta_serial1', 'joinType'=>'INNER']);
        $this->belongsTo('Boleta',['foreingKey'=>'Boleta_serial', 'joinType'=>'INNER']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('serial')            ->allowEmpty('serial', 'create')            ->add('serial', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
            
        $validator
            ->scalar('prioridad')            ->requirePresence('prioridad', 'create')            ->notEmpty('prioridad');
        $validator
            ->scalar('estado')            ->requirePresence('estado', 'create')            ->notEmpty('estado');
        $validator
            ->integer('Bicicleta_serial1')            ->requirePresence('Bicicleta_serial1', 'create')            ->notEmpty('Bicicleta_serial1');
        $validator
            ->integer('Boleta_serial')            ->requirePresence('Boleta_serial', 'create')            ->notEmpty('Boleta_serial');
        return $validator;
    }

    
    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */

     public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['serial']));

        return $rules;
    }
}
