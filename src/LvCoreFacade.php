<?php

namespace Atapx\LvCore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Atapx\LvCore\Skeleton\SkeletonClass
 */
class LvCoreFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lv-core';
    }
}
