<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
class WebserviceExceptionCore extends Exception
{
    protected $status;
    /**
     * @var string
     */
    protected $wrong_value;
    /**
     * @var array
     */
    protected $available_values;
    protected $type;

    public const SIMPLE = 0;
    public const DID_YOU_MEAN = 1;

    public function __construct($message, $code)
    {
        $exception_code = $code;
        if (is_array($code)) {
            $exception_code = $code[0];
            $this->setStatus($code[1]);
        }
        parent::__construct($message, $exception_code);
        $this->type = self::SIMPLE;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function setStatus($status)
    {
        if (Validate::isInt($status)) {
            $this->status = $status;
        }

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getWrongValue()
    {
        return $this->wrong_value;
    }

    /**
     * @param string $wrong_value
     * @param array $available_values
     *
     * @return self
     */
    public function setDidYouMean($wrong_value, $available_values)
    {
        $this->type = self::DID_YOU_MEAN;
        $this->wrong_value = $wrong_value;
        $this->available_values = $available_values;

        return $this;
    }

    public function getAvailableValues()
    {
        return $this->available_values;
    }
}
