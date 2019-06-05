<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/6/5
 * Time: 17:41
 */

namespace ESD\Core\Plugins\Logger;


class LoggerExtra
{
    /**
     * @var array
     */
    private $context = "";

    public static function get()
    {
        $result = getDeepContextValueByClassName(LoggerExtra::class);
        if ($result == null) {
            $result = new LoggerExtra();
            setContextValue("LoggerExtra", $result);
        }
        return $result;
    }

    public function addContext($key, $value)
    {
        if (empty($this->context)) $this->context = [];
        $this->context[$key] = $value;
    }

    /**
     * @return array
     */
    public function getContext()
    {
        if (is_array($this->context)) {
            return array_values($this->context);
        }
        return $this->context;
    }
}