<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 6/26/2015
 * Time: 1:08 AM
 */

namespace ConsumerCloud\Brigs\Repositories\Eloquents;


class Consumer
{

    protected $guarded    = ['id'];
    protected $table      = "consumer";
    public    $timestamps = false;

}