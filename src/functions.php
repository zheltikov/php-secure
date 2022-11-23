<?php

namespace Zheltikov\Secure;

/**
 * Returns a secure random generated token, based on a secure random generated
 * string with the given byte count.
 *
 * @param int $bytes The number of bytes for the token base string.
 */
function randomToken(int $bytes = 32): string
{
    return rtrim(strtr(base64_encode(random_bytes($bytes)), '+/', '-_'), '=');
}
