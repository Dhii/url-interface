<?php

namespace Dhii\Url;

use Dhii\Util\String\StringableInterface as Stringable;

/**
 * Something that is aware of, and can provide, a URL.
 *
 * @since [*next-version*]
 */
interface UrlAwareInterface
{
    /**
     * Retrieves the URL.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable
     */
    public function getUrl();
}
