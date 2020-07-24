<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcademicSemestersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcademicSemestersTable Test Case
 */
class AcademicSemestersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AcademicSemestersTable
     */
    public $AcademicSemesters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AcademicSemesters',
        'app.Schools',
        'app.Assignment',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AcademicSemesters') ? [] : ['className' => AcademicSemestersTable::class];
        $this->AcademicSemesters = TableRegistry::getTableLocator()->get('AcademicSemesters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AcademicSemesters);

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
