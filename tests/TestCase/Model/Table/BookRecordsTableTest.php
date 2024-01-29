<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BookRecordsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BookRecordsTable Test Case
 */
class BookRecordsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BookRecordsTable
     */
    public $BookRecords;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BookRecords',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BookRecords') ? [] : ['className' => BookRecordsTable::class];
        $this->BookRecords = TableRegistry::getTableLocator()->get('BookRecords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BookRecords);

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
