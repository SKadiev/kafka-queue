<?php

namespace Kafka;

use Illuminate\Support\ServiceProvider;

class KafkaServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $menager = $this->app['queue'];

        $menager->addConnector('kafka', function () {
            return new KafkaConnector();
        });
    }
}
