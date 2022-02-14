<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Response;
use MarcinOrlowski\ResponseBuilder\Exceptions\ArrayWithMixedKeysException;
use MarcinOrlowski\ResponseBuilder\Exceptions\ConfigurationNotFoundException;
use MarcinOrlowski\ResponseBuilder\Exceptions\IncompatibleTypeException;
use MarcinOrlowski\ResponseBuilder\Exceptions\InvalidTypeException;
use MarcinOrlowski\ResponseBuilder\Exceptions\MissingConfigurationKeyException;
use MarcinOrlowski\ResponseBuilder\Exceptions\NotIntegerException;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {

        try {
            return $this->success([], 200);
        } catch (\Exception $e) {
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAdminRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(StoreAdminRequest $request): \Symfony\Component\HttpFoundation\Response
    {
        try {
            $data = $request->validated();
            Admin::insert($data);
            return $this->success([], 200);
        } catch (\Exception $e) {
            try {
                return $this->error($e->getMessage());
            } catch (ArrayWithMixedKeysException|ConfigurationNotFoundException|IncompatibleTypeException|NotIntegerException|InvalidTypeException|MissingConfigurationKeyException $e) {
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Admin $admin
     * @return Response
     */
    public function show(Admin $admin): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $admin
     * @return Response
     */
    public function edit(Admin $admin): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAdminRequest $request
     * @param Admin $admin
     * @return Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin): Response
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Admin $admin
     * @return Response
     */
    public function destroy(Admin $admin): Response
    {
        //
    }
}
