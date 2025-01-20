<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ApplicationsFixture
 */
class ApplicationsFixture extends TestFixture
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
                'street1' => 'Lorem ipsum dolor sit amet',
                'street2' => 'Lorem ipsum dolor sit amet',
                'postcode' => 'Lorem ip',
                'state' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum d',
                'summary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'skill_id' => 1,
                'language_id' => 1,
                'qualification_id' => 1,
                'project_id' => 1,
                'refer_id' => 1,
                'status' => 1,
                'created' => '2025-01-19 21:33:14',
                'modified' => '2025-01-19 21:33:14',
            ],
        ];
        parent::init();
    }
}
