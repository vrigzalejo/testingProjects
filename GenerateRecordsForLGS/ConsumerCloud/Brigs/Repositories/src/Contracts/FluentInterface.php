<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 10:17 PM
 */

namespace ConsumerCloud\Brigs\Repositories\Contracts;


interface FluentInterface
{
    public function debug( $msg );

    public function info( $msg );

    public function warn( $msg );

    public function crit( $msg );

    public function log( $msg, $severity = 9 );

}