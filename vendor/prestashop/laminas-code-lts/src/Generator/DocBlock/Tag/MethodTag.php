<?php

namespace Laminas\Code\Generator\DocBlock\Tag;

use function rtrim;

class MethodTag extends AbstractTypeableTag implements TagInterface
{
    /** @var string */
    protected $methodName;

    /** @var bool */
    protected $isStatic = false;

    /**
     * @param null|string $methodName
     * @param array       $types
     * @param null|string $description
     * @param bool        $isStatic
     */
    public function __construct($methodName = null, $types = [], $description = null, $isStatic = false)
    {
        if (! empty($methodName)) {
            $this->setMethodName($methodName);
        }

        $this->setIsStatic((bool) $isStatic);

        parent::__construct($types, $description);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'method';
    }

    /**
     * @param bool $isStatic
     * @return $this
     */
    public function setIsStatic($isStatic)
    {
        $this->isStatic = $isStatic;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatic()
    {
        return $this->isStatic;
    }

    /**
     * @param string $methodName
     * @return $this
     */
    public function setMethodName($methodName)
    {
        $this->methodName = rtrim($methodName, ')(');
        return $this;
    }

    /**
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * @return string
     */
    public function generate()
    {
        return '@method'
            . ($this->isStatic ? ' static' : '')
            . (! empty($this->types) ? ' ' . $this->getTypesAsString() : '')
            . (! empty($this->methodName) ? ' ' . $this->methodName . '()' : '')
            . (! empty($this->description) ? ' ' . $this->description : '');
    }
}
