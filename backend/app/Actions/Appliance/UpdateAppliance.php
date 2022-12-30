<?php

namespace   App\Actions\Appliance;

use App\Contracts\UpdatesAppliances;

class UpdateAppliance implements UpdatesAppliances
{

    public function handle($request, $appliance)
    {
        $data = $appliance->update([
            'name'           => $request->name,
            'description'    => $request->description,
            'image'          => $request->image,
            'voltage'        => $request->voltage,
            'brand'          => $request->brand,
            'status'         => $request->status,
            'reference'      => $request->reference,
            'line'           => $request->line,
            'color'          => $request->color,
            'product_weight' => $request->product_weight,
        ]);
        // $data = Appliance::create([
        // ]);

        return $data;
    }

}