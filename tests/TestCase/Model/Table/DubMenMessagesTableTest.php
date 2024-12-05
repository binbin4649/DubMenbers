<?php
declare(strict_types=1);
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.7
 * @license       https://basercms.net/license/index.html MIT License
 */

namespace DubMenbers\Test\TestCase\Model\Table;

use Cake\TestSuite\TestCase;
use DubMenbers\Model\Table\DubMenMessagesTable;

/**
 * DubMenbers\Model\Table\DubMenMessagesTable Test Case
 */
class DubMenMessagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \DubMenbers\Model\Table\DubMenMessagesTable
     */
    protected $DubMenMessages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'plugin.DubMenbers.DubMenMessages',
        'plugin.DubMenbers.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DubMenMessages') ? [] : ['className' => DubMenMessagesTable::class];
        $this->DubMenMessages = $this->getTableLocator()->get('DubMenMessages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DubMenMessages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \DubMenbers\Model\Table\DubMenMessagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \DubMenbers\Model\Table\DubMenMessagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
