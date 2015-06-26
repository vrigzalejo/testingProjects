<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 6/20/15
 * Time: 4:52 PM
 */

namespace ConsumerCloud\Brigs\Repositories;


use ConsumerCloud\Brigs\Repositories\Exceptions\RepositoryException;

abstract class AbstractRepository
{

    private $model;
    private $app;
    private $validator;

    public function __construct( App $app = null, $validator = null )
    {
        $this->app       = $app;
        $this->validator = $validator;
        $this->makeModel();
    }

    // Manually set the model in the child class
    abstract function model();

    public function all( $columns = array( '*' ) )
    {
        return $this->model->get( $columns );
    }


    /**
     * @param int   $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate( $perPage = 15, $columns = array( '*' ) )
    {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function create( array $data )
    {
        return $this->model->create($data);
    }

    /**
     * @param array  $data
     * @param        $id
     * @param string $attribute
     *
     * @return mixed
     */
    public function update( array $data, $id, $attribute = "id" )
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function delete( $id )
    {
        return $this->model->destroy($id);
    }

    /**
     * @param       $id
     * @param array $columns
     *
     * @return mixed
     */
    public function find( $id, $columns = array( '*' ) )
    {
        return $this->model->find($id, $columns);
    }

    /**
     * @param       $attribute
     * @param       $value
     * @param array $columns
     *
     * @return mixed
     */
    public function findBy( $attribute, $value, $columns = array( '*' ) )
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    private function makeModel()
    {
        $model = $this->app->make( $this->model() );

        if( ! $model instanceof Model )
            throw new RepositoryException( "Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model" );

        return $this->model = $model->newQuery();
    }

}