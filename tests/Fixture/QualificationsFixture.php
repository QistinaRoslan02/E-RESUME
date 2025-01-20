<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * QualificationsFixture
 */
class QualificationsFixture extends TestFixture
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
                'instituition_name' => 'Lorem ipsum dolor sit amet',
                'year_of_completion' => 1,
                'grade' => 'Lorem ip',
                'certificate' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-01-19 16:45:18',
                'modified' => '2025-01-19 16:45:18',
            ],
        ];
        parent::init();
    }
}
