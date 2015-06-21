<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/20/15
 * Time: 4:44 PM
 */

namespace ConsumerCloud\Brigs\Repositories\Contracts;


interface GuzzleInterface
{

    public function setClient( $data = array() );

    public function setRequest( $method, $url );
}