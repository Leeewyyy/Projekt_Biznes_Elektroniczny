<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder400e8 = null;
    private $initializer280c5 = null;
    private static $publicPropertiesfec3d = [
        
    ];
    public function getConnection()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getConnection', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getMetadataFactory', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getExpressionBuilder', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'beginTransaction', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getCache', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getCache();
    }
    public function transactional($func)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'transactional', array('func' => $func), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'wrapInTransaction', array('func' => $func), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'commit', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->commit();
    }
    public function rollback()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'rollback', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getClassMetadata', array('className' => $className), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'createQuery', array('dql' => $dql), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'createNamedQuery', array('name' => $name), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'createQueryBuilder', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'flush', array('entity' => $entity), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'clear', array('entityName' => $entityName), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->clear($entityName);
    }
    public function close()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'close', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->close();
    }
    public function persist($entity)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'persist', array('entity' => $entity), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'remove', array('entity' => $entity), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'refresh', array('entity' => $entity), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'detach', array('entity' => $entity), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'merge', array('entity' => $entity), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getRepository', array('entityName' => $entityName), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'contains', array('entity' => $entity), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getEventManager', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getConfiguration', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'isOpen', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getUnitOfWork', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getProxyFactory', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'initializeObject', array('obj' => $obj), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'getFilters', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'isFiltersStateClean', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'hasFilters', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return $this->valueHolder400e8->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer280c5 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder400e8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder400e8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder400e8->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, '__get', ['name' => $name], $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        if (isset(self::$publicPropertiesfec3d[$name])) {
            return $this->valueHolder400e8->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder400e8;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder400e8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder400e8;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder400e8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, '__isset', array('name' => $name), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder400e8;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder400e8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, '__unset', array('name' => $name), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder400e8;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder400e8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, '__clone', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        $this->valueHolder400e8 = clone $this->valueHolder400e8;
    }
    public function __sleep()
    {
        $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, '__sleep', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
        return array('valueHolder400e8');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer280c5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer280c5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer280c5 && ($this->initializer280c5->__invoke($valueHolder400e8, $this, 'initializeProxy', array(), $this->initializer280c5) || 1) && $this->valueHolder400e8 = $valueHolder400e8;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder400e8;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder400e8;
    }
}
