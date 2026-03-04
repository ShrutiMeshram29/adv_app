<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgenciesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgenciesTable Test Case
 */
class AgenciesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgenciesTable
     */
    protected $Agencies;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Agencies',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Agencies') ? [] : ['className' => AgenciesTable::class];
        $this->Agencies = $this->getTableLocator()->get('Agencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Agencies);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\AgenciesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
