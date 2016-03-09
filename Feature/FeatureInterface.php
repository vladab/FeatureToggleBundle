<?php

namespace Vladab\FeatureToggleBundle\Feature;

/**
 * FeatureInterface interface.
 *
 * @author Benjamin Grandfond <benjaming@theodo.fr>
 */

interface FeatureInterface
{
    /**
     * @abstract
     * @return boolean
     */
    function isEnabled();
}
