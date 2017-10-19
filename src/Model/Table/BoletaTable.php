<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Boleta Model
 *
 * @method \App\Model\Entity\Boletum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Boletum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Boletum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Boletum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Boletum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Boletum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Boletum findOrCreate($search, callable $callback = null, $options = [])
 */class BoletaTable extends Table
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

        $this->setTable('boleta');
        $this->setDisplayField('serial');
        $this->setPrimaryKey('serial');
        $this->belongsTo('Usuario',['foreingKey'=>'Usuario_cedula','joinType'=>'INNER']);
        $this->belongsTo('Cliente',['foreingKey'=>'Cliente_cedula','joinType'=>'INNER']);
        $this->hasMany('Mantenimiento', ['foreingKey'=>'serial']);
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
            ->date('fecha')            ->requirePresence('fecha', 'create')            ->notEmpty('fecha');
        $validator
            ->scalar('garantia')            ->requirePresence('garantia', 'create')            ->notEmpty('garantia');
        $validator
            ->scalar('Usuario_cedula')            ->requirePresence('Usuario_cedula', 'create')            ->notEmpty('Usuario_cedula');
        $validator
            ->scalar('Cliente_cedula')            ->requirePresence('Cliente_cedula', 'create')            ->notEmpty('Cliente_cedula');
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
