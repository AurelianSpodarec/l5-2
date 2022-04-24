<?php

/**
 * Theme helpers.
 */

namespace App;

use Roots\Acorn\Assets\Contracts\Asset;

/**
 * Get asset from manifest
 *
 * @param  string $asset
 * @return Asset
 */
function resource(string $asset): Asset
{   
    return \Roots\app('assets.resource.manifest')->asset($asset);
}