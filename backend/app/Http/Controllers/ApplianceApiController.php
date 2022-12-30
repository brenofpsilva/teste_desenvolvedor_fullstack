<?php

namespace App\Http\Controllers;

// use App\Http\Requests\ApplianceRequest;
use App\Http\Resources\ApplianceResource;
use App\Models\Appliance;
// use Illuminate\Http\ApplianceRequest;
// use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ApplianceApiController extends Controller
{
    // $appliances = Appliance::all();
    public function index()
    {
        $appliances = Appliance::all();

        return ApplianceResource::collection($appliances);
    }

    public function store(Request $request)
    {
        $appliance = Appliance::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'voltage' => $request->voltage,
            'brand' => $request->brand,
            'status' => $request->status,
            'reference' => $request->reference,
            'line' => $request->line,
            'color' => $request->color,
            'product_weight' => $request->product_weight,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Novo produto criado com sucesso!',
            'errors'  => null,
            'data'    => $appliance,
        ], 200);
        // $appliances = Appliance::all();

        // return ApplianceResource::collection($appliances);
        // dd($request->name);
        // try{
        //     $appliance = new Appliance;
        //     $appliance->fill($request->validated())->save();

        //     // return $this->responseSuccess($appliance, 'Novo produto criado com sucesso!');

        //     return response()->json([
        //         'status'  => true,
        //         'message' => 'Novo produto criado com sucesso!',
        //         'errors'  => null,
        //         'data'    => $appliance,
        //     ], JsonResponse::HTTP_OK);

        // }catch(\Exception $exception) {
        //     throw new HttpException("Dados inválidos - {$exception->getMessage}", 400);
        // }
    }
}
