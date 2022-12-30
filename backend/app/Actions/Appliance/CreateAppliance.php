<?php

namespace App\Actions\Appliance;

use App\Contracts\CreatesNewAppliances;
use App\Helpers\UploadHelper;
use App\Models\Appliance;

class CreateAppliance implements CreatesNewAppliances
{

    public function handle($request)
    {

        $request->image = null;

        if (!empty($request->file('image'))) {
            $request->image = UploadHelper::upload('image', $request->file('image'), md5($request->name) . '-' . time(), 'images/products');
        }

        $data = Appliance::create([
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

        return $data;
    }
}