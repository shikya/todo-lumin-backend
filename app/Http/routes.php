<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/',['middleware' => 'cros', function () use ($app) {
	return App\Todo::all();
}]);

$app->post('/',['middleware' => 'cros', function (Illuminate\Http\Request $request) use ($app) {
	$todo = new App\Todo;
	$todo->name = $request->name;
	$todo->save();
	return $todo->toJson();
}]);

$app->options('/',['middleware' => 'cros', function () use ($app) {
}]);
