<?php

namespace Gam6itko\AdvCash;

/**
 * createBitcoinInvoiceResult
 */
class createBitcoinInvoiceResult extends createBitcoinInvoiceRequest
{
    /**
     * @access public
     * @var string
     */
    public $bitcoinAddress;
    /**
     * @access public
     * @var double
     */
    public $bitcoinAmount;
}