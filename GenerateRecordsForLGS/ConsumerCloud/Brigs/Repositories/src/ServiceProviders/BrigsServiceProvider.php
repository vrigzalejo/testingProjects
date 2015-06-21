<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 4:51 PM
 */

namespace ConsumerCloud\Brigs\Repositories\ServiceProviders;


use Illuminate\Support\ServiceProvider;

class BrigsServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( 'ConsumerCloud\Brigs\Repositories\Contracts\GuzzleInterface',
                          'ConsumerCloud\Brigs\Repositories\GuzzleRepository' );
        $this->app->bind( 'ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface',
                          'ConsumerCloud\Brigs\Repositories\FluentRepository' );
        $this->app->bind( 'ConsumerCloud\Brigs\Repositories\Contracts\ExportQueueInterface',
                          'ConsumerCloud\Brigs\Repositories\ExportQueueRepository' );
        $this->app->bind( 'ConsumerCloud\Brigs\Repositories\Contracts\FakerInterface',
                          'ConsumerCloud\Brigs\Repositories\FakerRepository' );
    }


}