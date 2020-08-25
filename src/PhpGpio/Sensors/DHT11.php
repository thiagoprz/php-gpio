<?php

namespace PhpGpio\Sensors;

use PhpGpio\Gpio;

/**
 * Class DHT11
 * @package PhpGpio\Sensors
 * @todo Implement DHT11 sensor communication
 */
class DHT11 implements SensorInterface
{

    /**
     * @var Gpio
     */
    private $_gpio;

    /**
     * DHT11 constructor.
     */
    public function __construct()
    {
        $this->_gpio = new Gpio();
    }

    /**
     * Read
     *
     * @param array $args
     * @return double
     */
    public function read($args = array())
    {
        // TODO: Implement read() method.
    }

    /**
     * Write
     *
     * @param array $args
     * @return $this
     */
    public function write($args = array())
    {
        // TODO: Implement write() method.
    }
}