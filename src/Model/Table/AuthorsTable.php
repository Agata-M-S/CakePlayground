<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
/**
 * Authors Model
 *
 * @method \App\Model\Entity\Author get($primaryKey, $options = [])
 * @method \App\Model\Entity\Author newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Author[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Author|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Author saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Author patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Author[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Author findOrCreate($search, callable $callback = null, $options = [])
 */
class AuthorsTable extends Table
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
    $this->setTable('authors');
    $this->setDisplayField('author_name');
    $this->setPrimaryKey('author_id');
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
            ->integer('author_id')
            ->allowEmptyString('author_id', null, 'create');

        $validator
            ->scalar('author_name')
            ->maxLength('author_name', 50)
            ->requirePresence('author_name', 'create')
            ->notEmptyString('author_name');

        $validator
            ->scalar('author_fun_fact')
            ->maxLength('author_fun_fact', 250)
            ->allowEmptyString('author_fun_fact');

        return $validator;
    }
}
