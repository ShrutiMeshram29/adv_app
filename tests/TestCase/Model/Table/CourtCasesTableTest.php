<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourtCasesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourtCasesTable Test Case
 */
class CourtCasesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CourtCasesTable
     */
    protected $CourtCases;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.CourtCases',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CourtCases') ? [] : ['className' => CourtCasesTable::class];
        $this->CourtCases = $this->getTableLocator()->get('CourtCases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CourtCases);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CourtCasesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
