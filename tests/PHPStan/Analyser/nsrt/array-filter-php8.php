<?php // lint >= 8.0

namespace ArrayFilterPhp8;

use function PHPStan\Testing\assertType;

/**
 * @param mixed $var1
 */
function withMixedInsteadOfArray($var1): void
{
	$filtered1 = array_filter($var1);
	assertType('(*NEVER*|array)', $filtered1);
}
