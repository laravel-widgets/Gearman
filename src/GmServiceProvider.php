<?php
namespace LaravelWidgets\Gm;

use Illuminate\Queue\QueueServiceProvider as ServiceProvider;

/**
 * Class GmServiceProvider
 * @package LaravelWidgets\Gm
 */
class GmServiceProvider extends ServiceProvider {

    /**
     * @param \Illuminate\Queue\QueueManager $manager
     */
    public function registerConnectors($manager)
    {
        parent::registerConnectors($manager);

        $manager->addConnector('gm',function () {
            return new GmConnector();
        });

    }

}