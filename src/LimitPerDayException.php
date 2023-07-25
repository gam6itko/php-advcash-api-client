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
     * @var currency
     */
    public $currency;
    /**
     * @access public
     * @var sexceptionType
     */
    public $type;
}
