<?php

declare(strict_types=1);

namespace Soluble\MediaTools\Video;

use Psr\Container\ContainerInterface;
use Soluble\MediaTools\Config\FFMpegConfig;
use Soluble\MediaTools\VideoThumbService;

class ThumbServiceFactory
{
    public function __invoke(ContainerInterface $container): ThumbServiceInterface
    {
        return new VideoThumbService(
            $container->get(FFMpegConfig::class)
        );
    }
}