<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypesProceduresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypesProceduresTable Test Case
 */
class TypesProceduresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypesProceduresTable
     */
    public $TypesProcedures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TypesProcedures',
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
        $config = TableRegistry::getTableLocator()->exists('TypesProcedures') ? [] : ['className' => TypesProceduresTable::class];
        $this->TypesProcedures = TableRegistry::getTableLocator()->get('TypesProcedures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypesProcedures);

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
