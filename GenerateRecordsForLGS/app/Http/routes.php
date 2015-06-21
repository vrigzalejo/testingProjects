<?php

//$app->get( '/', function () use ( $app ) {
//    return $app->welcome();
//} );

$app->group( array( 'namespace' => 'ConsumerCloud\Brigs\Repositories\Controllers' ), function ( $app ) {

    $app->get( '/json', function () use ( $app ) {

        return response()->json( [ "foo" => 'bar' ] )
            ->header( 'Access-Control-Allow-Origin', '*' );

    } );

    $app->get( '/',
               array( 'as'   => 'guzzle.index',
                      'uses' => 'GuzzleController@index' ) );
    $app->get( '/docs',
               array( 'as'   => 'guzzle.base',
                      'uses' => 'GuzzleController@getBase' ) );
    $app->get( '/docs/{any}',
               array( 'as'   => 'guzzle.any',
                      'uses' => 'GuzzleController@getUri' ) );

    $app->post( '/exportqueue/create',
               array( 'as'   => 'exportqueue.create',
                      'uses' => 'ExportQueueController@postCreateExportQueue' ) );
} );
