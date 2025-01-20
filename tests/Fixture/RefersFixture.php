<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RefersFixture
 */
class RefersFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'position' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2025-01-19 16:45:35',
                'modified' => '2025-01-19 16:45:35',
            ],
        ];
        parent::init();
    }
}
