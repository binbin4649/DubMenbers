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

namespace DubMenbers\ServiceProvider;

use Cake\Core\ServiceProvider;
use DubMenbers\Service\DubMenLogsServiceInterface;
use DubMenbers\Service\DubMenMessagesServiceInterface;
use DubMenbers\Service\DubMenMypagesServiceInterface;
use DubMenbers\Service\DubMenLogsService;
use DubMenbers\Service\DubMenMessagesService;
use DubMenbers\Service\DubMenMypagesService;

/**
 * DubMenbers Service Provider
 */
class DubMenbersServiceProvider extends ServiceProvider
{

    /**
     * Provides
     * @var string[]
     */
    protected array $provides = [
        //TableNameAdminServiceInterface::class,
        DubMenLogsServiceInterface::class,
        DubMenMessagesServiceInterface::class,
        DubMenMypagesServiceInterface::class,
    ];

    /**
     * Services
     * @param \Cake\Core\ContainerInterface $container
     */
    public function services($container): void
    {
        $container->defaultToShared(true);
        //$container->add(TableNameAdminServiceInterface::class, TableNameAdminService::class);
        $container->add(DubMenLogsServiceInterface::class, DubMenLogsService::class);
        $container->add(DubMenMessagesServiceInterface::class, DubMenMessagesService::class);
        $container->add(DubMenMypagesServiceInterface::class, DubMenMypagesService::class);
    }
}
