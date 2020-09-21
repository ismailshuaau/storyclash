<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


/**
 * Interface EloquentRepositoryInterface
 * @package App\Repositories
 */

 interface EloquentRepositoryInterface
 {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index();


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create();


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(array $data);


    /**
     * Display the specified resource.
     *
     * @param  String   $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id);


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request);


    /**
     * Update the specified resource in storage.
     *
     * @param  array  $data
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data, $id);

    /**
     * Remove the specified resource from storage.
     *
     * @param  String  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id);
 }
