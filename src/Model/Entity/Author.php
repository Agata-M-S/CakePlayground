<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Author Entity
 *
 * @property int $author_id
 * @property string $author_name
 * @property string|null $author_fun_fact
 */
class Author extends Entity
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
        'author_name' => true,
        'author_fun_fact' => true,
    ];
}
