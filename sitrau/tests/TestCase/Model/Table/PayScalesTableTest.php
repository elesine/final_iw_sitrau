<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PayScalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PayScalesTable Test Case
 */
class PayScalesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PayScalesTable
     */
    public $PayScales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PayScales',
        'app.Students',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PayScales') ? [] : ['className' => PayScalesTable::class];
        $this->PayScales = TableRegistry::getTableLocator()->get('PayScales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PayScales);

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
