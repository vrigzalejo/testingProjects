<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 11:38 PM
 */

namespace ConsumerCloud\Brigs\Repositories;


use ConsumerCloud\Brigs\Repositories\Contracts\ExportQueueInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FakerInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface;

class ExportQueueRepository extends AbstractRepository implements ExportQueueInterface
{
    private $fluent;
    private $faker;

    public function __construct( FluentInterface $fluent, FakerInterface $faker )
    {
        $this->fluent = $fluent;
        $this->faker  = $faker->setFaker();
    }

    function model()
    {
        return '\ConsumerCloud\Brigs\Repositories\Eloquents\ExportQueue';
    }

    public function createExportQueue( $times = 1 )
    {
        if( is_int( $times ) and $times > 0 ) {

            for( $i = 0; $i < $times; $i++ ) {
                $data = array(
                    "campaign"      => $this->faker->numberBetween( 1000, 9000 ),
                    "consumer_data" => $this->faker->address,
                    "created"       => $this->faker->dateTime( 'now' )->format( "Y-m-d H:i:s" ),
                    "delivered"     => null,
                );

                $this->fluent->info( "{$i} => {$data['campaign']}" );
                \ConsumerCloud\Brigs\Repositories\Eloquents\ExportQueue::create( $data );
//                $this->create( $data );

            }

        } else {

            $this->fluent->info( "{$times} is not an integer." );

        }

    }

}