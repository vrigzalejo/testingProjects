<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 10:29 PM
 */

namespace ConsumerCloud\Brigs\Repositories\Controllers;


use ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\GuzzleInterface;
use Laravel\Lumen\Routing\Controller;

class GuzzleController extends Controller
{

    private $guzzle;
    private $init;
    private $fluent;

    public function __construct( GuzzleInterface $guzzle, FluentInterface $fluent )
    {
        $this->guzzle = $guzzle;
        $this->fluent = $fluent;
        $this->init   = array( 'timeout' => 2.0, );
    }

    public function index()
    {

        return redirect( route( "guzzle.base" ) );
    }

    public function getBase()
    {

        return $this->guzzle->setClient( $this->init )->get( "/docs" )->getBody();
    }

    public function getUri( $uri )
    {

        return $this->guzzle->setClient( $this->init )->get( "/docs/" . $uri )->getBody();
    }

}