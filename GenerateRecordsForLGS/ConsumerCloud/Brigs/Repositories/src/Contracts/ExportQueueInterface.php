<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/21/15
 * Time: 11:38 PM
 */

namespace ConsumerCloud\Brigs\Repositories\Contracts;


/**
 * Interface ExportQueueInterface
 * @package ConsumerCloud\Brigs\Repositories\Contracts
 */
interface ExportQueueInterface
{
    /**
     * @param array $data
     * @param int   $times
     *
     * @return mixed
     */
    public function createExportQueue( $data = array(), $times = 1 );

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function all( $columns = array( '*' ) );

    /**
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate( $perPage = 15, $columns = array( '*' ) );

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create( array $data );

    /**
     * @param array  $data
     * @param        $id
     * @param string $attribute
     *
     * @return mixed
     */
    public function update( array $data, $id, $attribute = "id" );

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete( $id );

    /**
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find( $id, $columns = array( '*' ) );

    /**
     * @param       $attribute
     * @param       $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findBy( $attribute, $value, $columns = array( '*' ) );
}