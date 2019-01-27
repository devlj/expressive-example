<?php
declare(strict_types=1);
namespace App\Services;


use Predis\Client;

class RedisConnector
{
    private $client;

    private function starConnectionConfig() : Client {
        return $this->client = new Client([
            //IP AND PORT FOR THE REDIS CONTAINER,
            // BOTH CONTAINERS ASSOCIATED TO THE SAME NETWORK
            "host" => '172.19.0.2',
            "port" => 6379
        ]);
    }

    public function connection() : array
    {
        $this->starConnectionConfig();
        if ($this->client instanceof Client) {
            $this->client->set("my_redis",time());
        }

        return $this->client->info();
    }
}