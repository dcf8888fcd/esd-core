<?php
/**
 * Created by PhpStorm.
 * User: anythink-wx
 * Date: 2019-05-29
 * Time: 15:35
 */

namespace ESD\Core;

use Throwable;

class ParamException extends Exception
{
    /**
     * RouteException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->setTrace(false);
    }
}
