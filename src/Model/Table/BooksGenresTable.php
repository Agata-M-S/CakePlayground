<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BooksGenres Model
 *
 * @property \App\Model\Table\BookRecordsTable&\Cake\ORM\Association\BelongsTo $BookRecords
 * @property \App\Model\Table\GenresTable&\Cake\ORM\Association\BelongsTo $Genres
 *
 * @method \App\Model\Entity\BooksGenre get($primaryKey, $options = [])
 * @method \App\Model\Entity\BooksGenre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BooksGenre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BooksGenre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BooksGenre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BooksGenre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BooksGenre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BooksGenre findOrCreate($search, callable $callback = null, $options = [])
 */
class BooksGenresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('books_genres');
        $this->setPrimaryKey('id');
        $this->belongsTo('BookRecords', [
            'foreignKey' => 'book_id',
        ]);
        $this->belongsTo('Genres', [
            'foreignKey' => 'genre_id',
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['book_id'], 'BookRecords'));
        $rules->add($rules->existsIn(['genre_id'], 'Genres'));

        return $rules;
    }
}
