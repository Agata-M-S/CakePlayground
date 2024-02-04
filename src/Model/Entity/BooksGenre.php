<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BooksGenre Entity
 *
 * @property int|null $book_id
 * @property int|null $genre_id
 *
 * @property \App\Model\Entity\BookRecord $book_record
 * @property \App\Model\Entity\Genre $genre
 */
class BooksGenre extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'book_id' => true,
        'genre_id' => true,
        'book_record' => true,
        'genre' => true,
    ];
}
