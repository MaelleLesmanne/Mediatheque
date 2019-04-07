<?php

class SimpleLoader_4473cb1 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder6bff5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7e561 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0073a = [
        
    ];

    public function load(array $fixturesFiles, array $parameters = [], array $objects = [], ?\Fidry\AliceDataFixtures\Persistence\PurgeMode $purgeMode = null) : array
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'load', array('fixturesFiles' => $fixturesFiles, 'parameters' => $parameters, 'objects' => $objects, 'purgeMode' => $purgeMode), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return $this->valueHolder6bff5->load($fixturesFiles, $parameters, $objects, $purgeMode);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $instance, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($instance);

        $instance->initializer7e561 = $initializer;

        return $instance;
    }

    public function __construct(\Nelmio\Alice\FilesLoaderInterface $fileLoader, ?\Psr\Log\LoggerInterface $logger = null)
    {
        static $reflection;

        if (! $this->valueHolder6bff5) {
            $reflection = $reflection ?? new \ReflectionClass('Fidry\\AliceDataFixtures\\Loader\\SimpleLoader');
            $this->valueHolder6bff5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);

        }

        $this->valueHolder6bff5->__construct($fileLoader, $logger);
    }

    public function & __get($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__get', ['name' => $name], $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        if (isset(self::$publicProperties0073a[$name])) {
            return $this->valueHolder6bff5->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__isset', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__unset', array('name' => $name), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bff5;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6bff5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__clone', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        $this->valueHolder6bff5 = clone $this->valueHolder6bff5;
    }

    public function __sleep()
    {
        $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, '__sleep', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;

        return array('valueHolder6bff5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Fidry\AliceDataFixtures\Loader\SimpleLoader $instance) {
            unset($instance->filesLoader, $instance->logger);
        }, $this, 'Fidry\\AliceDataFixtures\\Loader\\SimpleLoader')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer7e561 = $initializer;
    }

    public function getProxyInitializer()
    {
        return $this->initializer7e561;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7e561 && ($this->initializer7e561->__invoke($valueHolder6bff5, $this, 'initializeProxy', array(), $this->initializer7e561) || 1) && $this->valueHolder6bff5 = $valueHolder6bff5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bff5;
    }

    public function getWrappedValueHolderValue() : ?object
    {
        return $this->valueHolder6bff5;
    }


}
