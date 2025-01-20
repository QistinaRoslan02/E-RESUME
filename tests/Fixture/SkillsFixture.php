<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SkillsFixture
 */
class SkillsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'skill_name' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-01-19 16:44:21',
                'modified' => '2025-01-19 16:44:21',
            ],
        ];
        parent::init();
    }
}
