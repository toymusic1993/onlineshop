<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderProductTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderProductTable Test Case
 */
class OrderProductTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderProductTable
     */
    public $OrderProduct;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.order_product',
        'app.orders',
        'app.products',
        'app.creators',
        'app.categories',
        'app.product_reviews'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrderProduct') ? [] : ['className' => 'App\Model\Table\OrderProductTable'];
        $this->OrderProduct = TableRegistry::get('OrderProduct', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderProduct);

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
