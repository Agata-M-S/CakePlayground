<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BookRecord Entity
 *
 * @property int $unique_id
 * @property string $title
 * @property int $price_in_pence
 * @property int|null $quantity_in_stock
 * @property \Cake\I18n\FrozenDate|null $release_date
 * @property bool|null $is_fiction
 */
class Book_record extends Entity
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
        '*' => true,
        'title' => true,
        'price_in_pence' => true,
        'quantity_in_stock' => true,
        'release_date' => true,
        'is_fiction' => true,
    ];
}
