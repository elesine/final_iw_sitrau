<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReceptionistTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReceptionistTable Test Case
 */
class ReceptionistTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReceptionistTable
     */
    public $Receptionist;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Receptionist',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Receptionist') ? [] : ['className' => ReceptionistTable::class];
        $this->Receptionist = TableRegistry::getTableLocator()->get('Receptionist', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Receptionist);

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
