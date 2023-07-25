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
     * @var currency
     */
    public $currency;
    /**
     * @access public
     * @var sexceptionType
     */
    public $type;
}
