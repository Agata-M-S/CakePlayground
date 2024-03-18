<?php
namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $user_id
 * @property string $user_first_name
 * @property string|null $user_last_name
 * @property \Cake\I18n\FrozenDate|null $user_date_created
 * @property string $password
 * @property string|null $username
 * @property string|null $email
 *
 * @property \App\Model\Entity\Review[] $reviews
 */
class User extends Entity
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
        'user_first_name' => true,
        'user_last_name' => true,
        'user_date_created' => true,
        'password' => true,
        'username' => true,
        'email' => true,
        'reviews' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())-> hash($password);
        }
    }
}
