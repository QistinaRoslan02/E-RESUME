<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LanguagesFixture
 */
class LanguagesFixture extends TestFixture
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
                'language_name' => 'Lorem ipsum dolor sit amet',
                'rating' => 1,
                'status' => 1,
                'created' => '2025-01-19 16:45:04',
                'modified' => '2025-01-19 16:45:04',
            ],
        ];
        parent::init();
    }
}
