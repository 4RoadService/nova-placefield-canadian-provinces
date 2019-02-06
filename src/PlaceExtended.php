<?php

namespace RoadService\NovaPlacefieldCanadianProvinces;

use Laravel\Nova\Fields\Place;

class PlaceExtended extends Place
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-placefield-canadian-provinces';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
    }
}
