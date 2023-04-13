<?php

namespace Gam6itko\AdvCash;

/**
 * currencyExchangeRequest
 */
class currencyExchangeRequest extends moneyRequest
{
    /**
     * @access public
     * @var tnscurrencyExchangeAction
     */
    public $action;
    /**
     * @access public
     * @var tnscurrency
     */
    public $from;
    /**
     * @access public
     * @var tnscurrency
     */
    public $to;
}