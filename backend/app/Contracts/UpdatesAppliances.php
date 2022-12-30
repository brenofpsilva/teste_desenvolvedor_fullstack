<?php

namespace App\Contracts;

use App\Models\Appliance;
use Illuminate\Http\Request;

interface UpdatesAppliances
{
    /**
     * Validate and create a newly registered appliance.
     *
     * @param request  $request
     * @return mixed
     */
    public function handle(Request $request, Appliance $appliance);
}