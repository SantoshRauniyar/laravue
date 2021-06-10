<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreateCrudModel;
use Illuminate\Http\Response;
use Faker\Generator;
class CreateCreateCrudModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(CreateCrudModel::all()->jsonSerialize(), Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Generator $faker)
{
  $CreateCrudModel = new CreateCrudModel();
  $CreateCrudModel->name = $faker->lexify('????????');
  $CreateCrudModel->color = $faker->boolean ? 'red' : 'green';
  $CreateCrudModel->save();

  return response($CreateCrudModel->jsonSerialize(), Response::HTTP_CREATED);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
  $CreateCrudModel = CreateCrudModel::findOrFail($id);
  $CreateCrudModel->color = $request->color;
  $CreateCrudModel->save();

  return response(null, Response::HTTP_OK);
}
}
