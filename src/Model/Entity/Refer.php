<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Refer Entity
 *
 * @property int $id
 * @property string $name
 * @property string $position
 * @property string $address
 * @property int $phone_number
 * @property string $email
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Application[] $applications
 */
class Refer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'position' => true,
        'address' => true,
        'phone_number' => true,
        'email' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'applications' => true,
    ];
}
