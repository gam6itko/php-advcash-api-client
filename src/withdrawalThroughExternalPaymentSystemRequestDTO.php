<?php

namespace Gam6itko\AdvCash;

/**
 * withdrawalThroughExternalPaymentSystemRequestDTO
 */
class withdrawalThroughExternalPaymentSystemRequestDTO
{
    /**
     * @access public
     * @var double
     */
    public $amount;
    /**
     * @access public
     * @var string
     */
    public $comment;
    /**
     * @access public
     * @var tnscurrency
     */
    public $currency;
    /**
     * @access public
     * @var tnsexternalSystemWithdrawalType
     */
    public $externalPaymentSystem;
    /**
     * @access public
     * @var string
     */
    public $receiver;
    /**
     * @access public
     * @var boolean
     */
    public $savePaymentTemplate;
}