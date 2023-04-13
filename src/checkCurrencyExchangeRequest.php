<?php

namespace Gam6itko\AdvCash;

/**
 * checkCurrencyExchangeRequest
 */
class checkCurrencyExchangeRequest
{
    /**
     * @access public
     * @var tnscurrencyExchangeAction
     */
    public $action;
    /**
     * @access public
     * @var double
     */
    public $amount;
    /**
     * @access public
     * @var string
     */
    public $depositMethod;
    /**
     * @access public
     * @var string
     */
    public $from;
    /**
     * @access public
     * @var string
     */
    public $to;
}