<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 11:38 PM
 */

namespace ConsumerCloud\Brigs\Repositories;


use ConsumerCloud\Brigs\Repositories\Contracts\ExportQueueInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface;

class ExportQueueRepository extends AbstractRepository implements ExportQueueInterface
{
    private $fluent;

    public function __construct( FluentInterface $fluent )
    {
        $this->fluent = $fluent;
    }

    function model()
    {
        return 'ConsumerCloud\Brigs\Repositories\Eloquents\ExportQueue';
    }

    public function createExportQueue( $data = array(), $times = 1 )
    {
        if( is_int( $times ) and $times > 0 ) {

            for( $i = 0; $i < $times; $i++ )
                $this->create( $data );

        } else {

            $this->fluent->info( "{$data} and {$times} are invalid." );

        }

    }

}