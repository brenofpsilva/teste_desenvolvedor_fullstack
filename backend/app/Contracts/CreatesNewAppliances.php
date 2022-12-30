<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface CreatesNewAppliances
{
    /**
     * Validate and create a newly registered appliance.
     *
     * @param  request  $request
     * @return mixed
     */
    public function handle(Request $request);
}