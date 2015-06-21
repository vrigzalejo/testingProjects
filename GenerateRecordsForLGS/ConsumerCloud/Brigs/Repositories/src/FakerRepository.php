<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 11:15 PM
 */

namespace ConsumerCloud\Brigs\Repositories;


use ConsumerCloud\Brigs\Repositories\Contracts\FakerInterface;

class FakerRepository implements FakerInterface
{

    public function setFaker()
    {
        return \Faker\Factory::create();
    }
}