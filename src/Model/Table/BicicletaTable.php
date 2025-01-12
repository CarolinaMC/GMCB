<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bicicleta Model
 *
 * @method \App\Model\Entity\Bicicletum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bicicletum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bicicletum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bicicletum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bicicletum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bicicletum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bicicletum findOrCreate($search, callable $callback = null, $options = [])
 */
class BicicletaTable extends Table
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

        $this->setTable('bicicleta');
        $this->setDisplayField('serial');
        $this->setPrimaryKey(['serial']);
        $this->belongsTo('Cliente',['foreingKey'=>'Cliente_cedula','joinType'=>'INNER']);
       // $this->belongsTo('Marca',['foreingKey'=>'marca','joinType'=>'INNER']);
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
            ->integer('serial')
            ->allowEmpty('serial', 'create')
            ->add('serial', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('marca')
            ->requirePresence('marca', 'create')
            ->notEmpty('marca');
       
        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->scalar('tamaño')
            ->requirePresence('tamaño', 'create')
            ->notEmpty('tamaño');

        $validator
            ->scalar('Cliente_cedula')
            ->requirePresence('Cliente_cedula', 'create')
            ->notEmpty('Cliente_cedula');

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
