<?php

/*
 * This file is part of the FOSRest package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Util;

use FOS\RestBundle\Controller\Annotations\Param;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;

interface ViolationFormatterInterface
{
    /**
     * Format a Param's ConstraintViolation into a string message
     *
     * @param Param                        $param
     * @param ConstraintViolationInterface $violation
     *
     * @return string
     */
    function format(Param $param, ConstraintViolationInterface $violation);
    
    /**
     * Format a Param's ConstraintViolationList into a string message
     *
     * @param Param                        $param
     * @param ConstraintViolationListInterface $violation
     *
     * @return string
     */
    function formatList(Param $param, ConstraintViolationListInterface $violationList);
}
