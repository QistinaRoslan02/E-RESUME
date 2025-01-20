<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property string $name
 * @property string $street1
 * @property string $street2
 * @property string $postcode
 * @property string $state
 * @property string $email
 * @property string $phone_number
 * @property string $summary
 * @property int|null $skill_id
 * @property int|null $language_id
 * @property int|null $qualification_id
 * @property int|null $project_id
 * @property int|null $refer_id
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Skill $skill
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\Qualification $qualification
 * @property \App\Model\Entity\Project $project
 * @property \App\Model\Entity\Refer $refer
 */
class Application extends Entity
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
        'street1' => true,
        'street2' => true,
        'postcode' => true,
        'state' => true,
        'email' => true,
        'phone_number' => true,
        'summary' => true,
        'skill_id' => true,
        'language_id' => true,
        'qualification_id' => true,
        'project_id' => true,
        'refer_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'skill' => true,
        'language' => true,
        'qualification' => true,
        'project' => true,
        'refer' => true,
    ];
}
