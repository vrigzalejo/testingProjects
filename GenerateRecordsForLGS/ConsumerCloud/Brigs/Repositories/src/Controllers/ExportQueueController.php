<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 11:08 PM
 */

namespace ConsumerCloud\Brigs\Repositories\Controllers;


use ConsumerCloud\Brigs\Repositories\Contracts\ExportQueueInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface;
use Laravel\Lumen\Routing\Controller;

class ExportQueueController extends Controller
{

    private $exportQueue;
    private $fluent;
    private $log;


    public function __construct( FluentInterface $fluent, ExportQueueInterface $exportQueue )
    {
        $this->exportQueue = $exportQueue;
        $this->fluent = $fluent;
    }

    public function postCreateExportQueue()
    {
//        $data = array(
//
//        );
//        return $this->exportQueue->createExportQueue();
    }

}