<?php

namespace App\Actions\Appliance;

use App\Contracts\DeletesAppliances;

class DeleteAppliance implements DeletesAppliances
{
    public function handle($appliance)
    {
        $data = $appliance->delete();

        return $data;
    }
}