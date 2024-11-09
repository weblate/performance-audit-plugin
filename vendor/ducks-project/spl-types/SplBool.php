<?php

/**
 * Part of SplTypes package.
 *
 * (c) Adrien Loyant <donald_duck@team-df.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ducks\Component\SplTypes;

/**
 * The SplBool class is used to enforce strong typing of the bool type.
 *
 * @see SplBool http://php.net/manual/en/class.splbool.php
 *
 * @psalm-api
 */
class SplBool extends SplEnum
{
    /**
     * @var bool
     */
    // phpcs:ignore Generic.NamingConventions.UpperCaseConstantName.ClassConstantNotUpperCase
    public const __default = self::false;

    /**
     * @var bool
     */
    // phpcs:ignore Generic.NamingConventions.UpperCaseConstantName.ClassConstantNotUpperCase
    public const false = false;

    /**
     * @var bool
     */
    // phpcs:ignore Generic.NamingConventions.UpperCaseConstantName.ClassConstantNotUpperCase
    public const true = true;
}
