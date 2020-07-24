<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CurriculasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CurriculasTable Test Case
 */
class CurriculasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CurriculasTable
     */
    public $Curriculas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Curriculas',
        'app.Schools',
        'app.Semesters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Curriculas') ? [] : ['className' => CurriculasTable::class];
        $this->Curriculas = TableRegistry::getTableLocator()->get('Curriculas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Curriculas);

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
