<?php

/*
 * This file is part of the Distill package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Distill\Format;

interface FormatInterface
{
    const RATIO_LEVEL_LOWEST = 0;
    const RATIO_LEVEL_LOW = 2;
    const RATIO_LEVEL_MIDDLE = 5;
    const RATIO_LEVEL_HIGH = 7;
    const RATIO_LEVEL_HIGHEST = 10;

    /**
     * Gets the format key name.
     * @static
     *
     * @return string Format name
     */
    public static function getName();

    /**
     * Gets the current class FQN.
     * @static
     *
     * @return string Current class FQN.
     */
    public static function getClass();

    /**
     * Gets the compression ratio level for the format.
     *
     * @return integer Compression ratio level (0: low, 10: high)
     */
    public static function getCompressionRatioLevel();

    /**
     * Gets the list of extensions associated to the format.
     *
     * @return array List of extensions
     */
    public static function getExtensions();
}
