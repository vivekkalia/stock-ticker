<?php

/**
 * The transactions model
 */
 class Transactions extends MY_Model {
    // constructor
    function __construct() {
        parent::__construct('transactions','DateTime');
    }
}
