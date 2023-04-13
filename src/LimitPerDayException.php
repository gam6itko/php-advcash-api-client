<?php

namespace Gam6itko\AdvCash;

/**
 * LimitPerDayException
 */
class LimitPerDayException
{
    /**
     * @access public
     * @var double
     */
    public $limitAmount;
    /**
     * @access public
     * @var tnscurrency
     */
    public $currency;
    /**
     * @access public
     * @var tnsexceptionType
     */
    public $type;
}