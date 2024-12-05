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
use DubMenbers\Model\Table\DubMenLogsTable;

/**
 * DubMenbers\Model\Table\DubMenLogsTable Test Case
 */
class DubMenLogsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \DubMenbers\Model\Table\DubMenLogsTable
     */
    protected $DubMenLogs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'plugin.DubMenbers.DubMenLogs',
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
        $config = $this->getTableLocator()->exists('DubMenLogs') ? [] : ['className' => DubMenLogsTable::class];
        $this->DubMenLogs = $this->getTableLocator()->get('DubMenLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DubMenLogs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \DubMenbers\Model\Table\DubMenLogsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \DubMenbers\Model\Table\DubMenLogsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
