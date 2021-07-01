<?php
namespace LaravelWidgets\Gm;

use \GearmanClient as GmClient;
use \GearmanWorker as GmWorker;
use Illuminate\Queue\Connectors\ConnectorInterface;

class GmConnector implements ConnectorInterface {

    /**
     * @param array $config
     * @return \Illuminate\Contracts\Queue\Queue|GmQueue
     */
    public function connect(array $config)
    {
        $client = new GmClient();
        $worker = new GmWorker();
        if (isset($config['hosts'])) {
            foreach($config['hosts'] as $server) {
                $client->addServer($server['host'],$server['port']);
                $worker->addServer($server['host'],$server['port']);
            }
        } else {
            $client->addServer($config['host'],$config['port']);
            $worker->addServer($config['host'],$config['port']);
        }
        if (isset($config['timeout']) && is_numeric($config['timeout'])) {
            $client->setTimeout($config['timeout']);
        }
        return new GmQueue($client,$worker,$config['queue']);
    }
}