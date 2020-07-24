<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniversityProceduresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniversityProceduresTable Test Case
 */
class UniversityProceduresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UniversityProceduresTable
     */
    public $UniversityProcedures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UniversityProcedures',
        'app.Students',
        'app.Faculties',
        'app.TypesProcedures',
        'app.StatusProcedures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UniversityProcedures') ? [] : ['className' => UniversityProceduresTable::class];
        $this->UniversityProcedures = TableRegistry::getTableLocator()->get('UniversityProcedures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UniversityProcedures);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
