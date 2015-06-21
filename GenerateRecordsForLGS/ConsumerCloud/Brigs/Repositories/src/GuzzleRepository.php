<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/20/15
 * Time: 4:40 PM
 */

namespace ConsumerCloud\Brigs\Repositories;

use \ConsumerCloud\Brigs\Repositories\Exceptions\BrigsRepositoryException;
use \GuzzleHttp\Client;
use \GuzzleHttp\Psr7\Request;
use \ConsumerCloud\Brigs\Repositories\Contracts\GuzzleInterface;

class GuzzleRepository extends AbstractRepository implements GuzzleInterface
{


    public function __construct()
    {
    }


    public function setClient( $data = array() )
    {
        if( ! array_key_exists( "base_uri", $data ) )
            array_push( $data, $data[ "base_uri" ] = getenv( 'GUZZLE_BASEURI' ) );

        return new Client( $data );


    }


    function model()
    {
        // TODO: Implement model() method.
    }

    public function setRequest( $method, $url )
    {
        if( is_string( $method ) and is_string( $url ) )
            return new Request( $method, $url );

        throw new BrigsRepositoryException( "{$method} and {$url} are not a valid request" );
    }
}