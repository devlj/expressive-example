<?php
/**
 * Created by PhpStorm.
 * User: catcoder
 * Date: 26/01/19
 * Time: 10:21 PM
 */
declare(strict_types=1);

namespace App\Factory;


use App\Services\RedisConnector;
use Psr\Container\ContainerInterface;

class RedisConnectorFactory
{
    public function __invoke(ContainerInterface $container):RedisConnector
    {
        return new RedisConnector();
    }
}