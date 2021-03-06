<?php

/**
 * @file classes/payment/CompletedPayment.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CompletedPayment
 * @ingroup classes_payment
 * @see CompletedPaymentDAO
 *
 * @brief Class describing a completed payment.
 */

import('lib.pkp.classes.payment.Payment');

class CompletedPayment extends Payment {
	/** @var string Payment completion timestamp */
	var $_timestamp;

	/** @var string Payment plugin name */
	var $_paymentPluginName;

	/**
	 * Get the payment completion timestamp.
	 * @return string
	 */
	function getTimestamp() {
		return $this->_timestamp;
	}

	/**
	 * Set the payment completion timestamp.
	 * @param $timestamp string Timestamp
	 */
	function setTimestamp($timestamp) {
		$this->_timestamp = $timestamp;
	}

	/**
	 * Get the payment plugin name.
	 * @return string
	 */
	function getPayMethodPluginName() {
		return $this->_paymentPluginName;
	}

	/**
	 * Set the payment plugin name.
	 * @param $paymentPluginName string
	 */
	function setPayMethodPluginName($paymentPluginName) {
		$this->_paymentPluginName = $paymentPluginName;
	}
}


