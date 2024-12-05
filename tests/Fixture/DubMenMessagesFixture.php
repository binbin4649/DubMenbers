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

namespace DubMenbers\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DubMenMessagesFixture
 */
class DubMenMessagesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'mypage_id' => 1,
                'user_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'contact_address' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'submit_datetime' => '2024-12-05 18:45:51',
                'flash_datetime' => '2024-12-05 18:45:51',
                'read_datetime' => '2024-12-05 18:45:51',
                'is_error' => 1,
                'is_flash' => 1,
                'is_read' => 1,
                'created' => '2024-12-05 18:45:51',
                'modified' => '2024-12-05 18:45:51',
            ],
        ];
        parent::init();
    }
}
