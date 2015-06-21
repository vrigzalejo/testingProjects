<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 11:18 PM
 */

namespace ConsumerCloud\Brigs\Repositories\Eloquents;


class ExportQueue extends AbstractEloquent {

    protected $fillable = ['campaign', 'consumer_data', 'created', 'delivered'];
    protected $table = "export_queue";
    public $timestamps = false;

}