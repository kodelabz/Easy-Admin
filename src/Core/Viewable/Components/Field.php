<?php


namespace EasyView\EasyView\Core\Viewable\Components;


class Field
{
    protected $field;
    protected $type;
    protected $isNullable;
    protected $key;
    protected $default;
    protected $extra;

    /**
     * Field constructor.
     * @param $field
     * @param $type
     * @param $isNullable
     * @param $key
     * @param $default
     * @param $extra
     */
    public function __construct($field, $type, $isNullable = false, $key = null, $default = null, $extra = null)
    {
        $this->field = $field;
        $this->type = $type;
        $this->isNullable = $isNullable;
        $this->key = $key;
        $this->default = $default;
        $this->extra = $extra;
    }


    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param mixed $field
     */
    public function setField($field): void
    {
        $this->field = $field;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getIsNullable()
    {
        return $this->isNullable;
    }

    /**
     * @param mixed $isNullable
     */
    public function setIsNullable($isNullable): void
    {
        $this->isNullable = $isNullable;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key): void
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @param mixed $default
     */
    public function setDefault($default): void
    {
        $this->default = $default;
    }

    /**
     * @return mixed
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param mixed $extra
     */
    public function setExtra($extra): void
    {
        $this->extra = $extra;
    }



}
