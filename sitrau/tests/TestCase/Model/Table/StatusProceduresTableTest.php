<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StatusProceduresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StatusProceduresTable Test Case
 */
class StatusProceduresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StatusProceduresTable
     */
    public $StatusProcedures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.StatusProcedures',
        'app.UniversityProcedures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StatusProcedures') ? [] : ['className' => StatusProceduresTable::class];
        $this->StatusProcedures = TableRegistry::getTableLocator()->get('StatusProcedures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StatusProcedures);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
