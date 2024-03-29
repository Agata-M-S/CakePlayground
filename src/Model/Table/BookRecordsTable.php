<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BookRecords Model
 *
 * @method \App\Model\Entity\BookRecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\BookRecord newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BookRecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BookRecord|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BookRecord saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BookRecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BookRecord[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BookRecord findOrCreate($search, callable $callback = null, $options = [])
 */
class BookRecordsTable extends Table
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
        $this->setTable('book_records');
        $this->setDisplayField('title');
        $this->setPrimaryKey('book_id');
        $this->belongsTo('Authors');
        $this->belongsToMany('Genres', [
          'through' => 'BooksGenres',
          'foreignKey' => 'book_id',
          'targetForeignKey' => 'genre_id' 
        ]);
        $this->belongsToMany('Reviews', [
          'through' => 'BookReviews',
          'foreignKey' => 'book_id',
          'targetForeignKey' => 'review_id' 
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
            ->integer('book_id')
            ->allowEmptyString('book_id', null, 'create');
        $validator
            ->scalar('title')
            ->maxLength('title', 50)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->integer('price_in_pence')
            ->requirePresence('price_in_pence', 'create')
            ->notEmptyString('price_in_pence');

        $validator
            ->integer('quantity_in_stock')
            ->allowEmptyString('quantity_in_stock');

        $validator
            ->date('release_date')
            ->allowEmptyDate('release_date');

        $validator
            ->boolean('is_fiction')
            ->allowEmptyString('is_fiction');

        $validator
            ->scalar('description')
            ->maxLength('description', 1000)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
