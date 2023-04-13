<?php

namespace Gam6itko\AdvCash;

/**
 * validateAccountResultDTO
 */
class validateAccountResultDTO extends validateAccountRequestDTO
{
    /**
     * @access public
     * @var double
     */
    public $firstNameMatchingPercentage;
    /**
     * @access public
     * @var double
     */
    public $lastNameMatchingPercentage;
    /**
     * @access public
     * @var boolean
     */
    public $verified;
}