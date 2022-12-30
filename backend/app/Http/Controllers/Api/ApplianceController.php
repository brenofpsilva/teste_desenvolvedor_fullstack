<?php

namespace App\Http\Controllers\Api;

use App\Actions\Appliance\CreateAppliance;
use App\Actions\Appliance\DeleteAppliance;
use App\Actions\Appliance\UpdateAppliance;
use App\Http\Controllers\Controller;
// use App\Http\Requests\ApplianceRequest;
use App\Http\Requests\CreateApplianceRequest;
use App\Http\Requests\UpdateApplianceRequest;
use App\Http\Resources\ApplianceResource;
use App\Models\Appliance;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appliances = Appliance::all();

        return ApplianceResource::collection($appliances);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateApplianceRequest $request, CreateAppliance $action)
    {

        $data = $action->handle($request);

        return response()->json([
            'status'  => true,
            'message' => 'Novo produto criado com sucesso!',
            'errors'  => null,
            'data'    => $data,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appliances = Appliance::find($id);

        return ApplianceResource::make($appliances);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplianceRequest $request, UpdateAppliance $action, Appliance $appliance)
    {
        $data = $action->handle($request, $appliance);

        return response()->json([
            'status'  => true,
            'message' => 'Produto atualizado com sucesso!',
            'errors'  => null,
            'data'    => $data,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteAppliance $action, Appliance $appliance)
    {
        $data = $action->handle($appliance);

        return response()->json([
            'status'  => true,
            'message' => 'Produto excluido com sucesso!',
            'errors'  => null,
            'data'    => null,
        ], 200);
    }
}
