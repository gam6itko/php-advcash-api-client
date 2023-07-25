<?php

namespace Gam6itko\AdvCash;

/**
 * currencyExchangeRequest
 */
class currencyExchangeRequest extends moneyRequest
{
    /**
     * @access public
     * @var currencyExchangeAction
     */
    public $action;
    /**
     * @access public
     * @var currency
     */
    public $from;
    /**
     * @access public
     * @var currency
     */
    public $to;
}
