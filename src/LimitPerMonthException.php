<?php

namespace Gam6itko\AdvCash;

/**
 * LimitPerMonthException
 */
class LimitPerMonthException
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