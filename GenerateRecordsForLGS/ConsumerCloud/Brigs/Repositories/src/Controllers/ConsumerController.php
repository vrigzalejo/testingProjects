<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 6/26/2015
 * Time: 1:04 AM
 */

namespace ConsumerCloud\Brigs\Repositories\Controllers;


use ConsumerCloud\Brigs\Repositories\Contracts\ConsumerInterface;

class ConsumerController extends Controller {

    private $consumer;


    public function __construct(
        ConsumerInterface $consumer
    )
    {
        $this->consumer = $consumer;
    }

    public function postConsumer()
    {

    }

}