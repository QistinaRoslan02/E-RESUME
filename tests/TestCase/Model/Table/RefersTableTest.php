<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RefersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RefersTable Test Case
 */
class RefersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RefersTable
     */
    protected $Refers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Refers',
        'app.Applications',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Refers') ? [] : ['className' => RefersTable::class];
        $this->Refers = $this->getTableLocator()->get('Refers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Refers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RefersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
