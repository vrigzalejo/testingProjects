<?php
/**
 * Created by PhpStorm.
 * User: brigido.alejo
 * Date: 6/26/2015
 * Time: 1:08 AM
 */

namespace ConsumerCloud\Brigs\Repositories;


use ConsumerCloud\Brigs\Repositories\Contracts\ConsumerInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FakerInterface;
use ConsumerCloud\Brigs\Repositories\Contracts\FluentInterface;

class ConsumerRepository extends AbstractRepository implements ConsumerInterface
{

    public function __construct(FluentInterface $fluent, FakerInterface $faker)
    {
        parent::__construct();
        $this->fluent = $fluent;
        $this->faker  = $faker->setFaker();
    }

    function model()
    {
        return 'ConsumerCloud\Brigs\Repositories\Eloquents\Consumer';
    }

    public function addConsumer()
    {
        // TODO: Implement addConsumer() method.
    }

    public function updateConsumer()
    {
        // TODO: Implement updateConsumer() method.
    }
}