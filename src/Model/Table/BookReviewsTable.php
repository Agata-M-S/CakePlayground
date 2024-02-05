<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BookReviews Model
 *
 * @property \App\Model\Table\BookRecordsTable&\Cake\ORM\Association\BelongsTo $BookRecords
 * @property \App\Model\Table\ReviewsTable&\Cake\ORM\Association\BelongsTo $Reviews
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\BookReview get($primaryKey, $options = [])
 * @method \App\Model\Entity\BookReview newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BookReview[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BookReview|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BookReview saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BookReview patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BookReview[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BookReview findOrCreate($search, callable $callback = null, $options = [])
 */
class BookReviewsTable extends Table
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

        $this->setTable('book_reviews');

        $this->belongsTo('BookRecords', [
            'foreignKey' => 'book_id',
        ]);
        $this->belongsTo('Reviews', [
            'foreignKey' => 'review_id',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
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
        $rules->add($rules->existsIn(['book_id'], 'BookRecords'));
        $rules->add($rules->existsIn(['review_id'], 'Reviews'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
