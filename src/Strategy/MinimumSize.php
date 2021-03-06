<?php

/*
 * This file is part of the Distill package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Distill\Strategy;

use Distill\FileInterface;
use Distill\Method\MethodInterface;
use Distill\Format\FormatInterface;

/**
 * Minimum size strategy.
 *
 * The goal of this strategy is to try to use compressed files with better
 * compression ratio.
 *
 * @author Raul Fraile <raulfraile@gmail.com>
 */
class MinimumSize extends AbstractStrategy
{
    /**
     * {@inheritdoc}
     */
    public static function getName()
    {
        return 'minimum_size';
    }

    /**
     * {@inheritdoc}
     */
    protected function getPriorityValueForFile(FileInterface $file, array $methods)
    {
        $format = $file->getFormat();

        return $format->getCompressionRatioLevel() + ($this->getMaxUncompressionSpeedFormat($format, $methods) / 10);
    }
}
