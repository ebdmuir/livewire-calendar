<?php

namespace Ebdm\LivewireCalendar;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ebdm\LivewireCalendar\Skeleton\SkeletonClass
 */
class LivewireCalendarFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'livewire-calendar';
    }
}
