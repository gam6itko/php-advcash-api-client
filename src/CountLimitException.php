<?php

namespace Gam6itko\AdvCash;

/**
 * CountLimitException
 */
class CountLimitException
{
    /**
     * @access public
     * @var integer
     */
    public $limitCount;
    /**
     * @access public
     * @var tnsdateIntervals
     */
    public $dateInterval;
    /**
     * @access public
     * @var tnsexceptionType
     */
    public $type;
}