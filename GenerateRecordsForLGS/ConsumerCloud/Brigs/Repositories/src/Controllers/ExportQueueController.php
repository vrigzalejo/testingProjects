<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 11:08 PM
 */

namespace ConsumerCloud\Brigs\Repositories\Controllers;


use ConsumerCloud\Brigs\Repositories\Contracts\ExportQueueInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FakerInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface;
use Laravel\Lumen\Routing\Controller;

class ExportQueueController extends Controller
{

    private $exportQueue;


    public function __construct(
        ExportQueueInterface $exportQueue
    )
    {
        $this->exportQueue = $exportQueue;
    }

    public function postCreateExportQueue()
    {
        return $this->exportQueue->createExportQueue( 3 );
    }

}