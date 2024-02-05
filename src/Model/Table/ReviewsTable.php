<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reviews Model
 *
 * @method \App\Model\Entity\Review get($primaryKey, $options = [])
 * @method \App\Model\Entity\Review newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Review[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Review|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Review saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Review patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Review[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Review findOrCreate($search, callable $callback = null, $options = [])
 */
class ReviewsTable extends Table
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

        $this->setTable('reviews');
        $this->setDisplayField('review_id');
        $this->setPrimaryKey('review_id');
        $this -> belongsToMany('BookRecords', [
          'through'=>'BookReviews',
          'foreignKey'=>'review_id',
          'targetForeignKey' => 'book_id' 
        ]);
        $this -> belongsToMany('Users', [
          'through'=>'BookReviews',
          'foreignKey'=>'review_id',
          'targetForeignKey' => 'user_id' 
        ]);
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
            ->integer('review_id')
            ->allowEmptyString('review_id', null, 'create');

        $validator
            ->integer('review_score')
            ->requirePresence('review_score', 'create')
            ->notEmptyString('review_score');

        $validator
            ->scalar('review')
            ->maxLength('review', 1000)
            ->allowEmptyString('review');

        $validator
            ->date('review_date')
            ->allowEmptyDate('review_date');

        return $validator;
    }
}
