<?php

namespace OpenSpout\Common\Entity\Style;

/**
 * This class provides constants to work with text vertical alignment.
 */
final class CellVerticalAlignment
{
    const AUTO = 'auto';
    const BASELINE = 'baseline';
    const BOTTOM = 'bottom';
    const CENTER = 'center';
    const DISTRIBUTED = 'distributed';
    const JUSTIFY = 'justify';
    const TOP = 'top';

    const VALID_ALIGNMENTS = [
        self::AUTO => 1,
        self::BASELINE => 1,
        self::BOTTOM => 1,
        self::CENTER => 1,
        self::DISTRIBUTED => 1,
        self::JUSTIFY => 1,
        self::TOP => 1,
    ];

    /**
     * @return bool Whether the given cell vertical alignment is valid
     */
    public static function isValid($cellVerticalAlignment)
    {
        return array_key_exists($cellVerticalAlignment, self::VALID_ALIGNMENTS);
    }
}
