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
use DubMenbers\Model\Table\DubMenMypagesTable;

/**
 * DubMenbers\Model\Table\DubMenMypagesTable Test Case
 */
class DubMenMypagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \DubMenbers\Model\Table\DubMenMypagesTable
     */
    protected $DubMenMypages;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'plugin.DubMenbers.DubMenMypages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DubMenMypages') ? [] : ['className' => DubMenMypagesTable::class];
        $this->DubMenMypages = $this->getTableLocator()->get('DubMenMypages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DubMenMypages);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \DubMenbers\Model\Table\DubMenMypagesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \DubMenbers\Model\Table\DubMenMypagesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
