<?php

namespace Kristofvc\ListBundle\Model;

class Column
{

    protected $name;
    protected $columnHeader;
    protected $sortable;
    protected $sortField;
    protected $route;
    protected $routeParams;
    protected $emptyValue;
    protected $parentField;
    protected $params;

    public function __construct($name, $columnHeader, $params = array())
    {
        // 'sortable' => false, 'sortField' => null, 'route' => null, 'routeParams' => null, 'column_empty_value' => null

        $this->name = $name;
        $this->columnHeader = $columnHeader;

        $this->sortable = isset($params['sortable']) ? $params['sortable'] : false;
        if (isset($params['sortField']) && !is_null($params['sortField'])) {
            $this->sortField = $params['sortField'];
        } else {
            $this->sortField = lcfirst($this->name);
        }

        $this->route = isset($params['route']) ? $params['route'] : null;
        $this->routeParams = isset($params['routeParams']) ? $params['routeParams'] : null;

        $this->emptyValue = isset($params['column_empty_value']) ? $params['column_empty_value'] : null;
        $this->parentField = isset($params['parentField']) ? $params['parentField'] : null;

        $this->params = $params;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getColumnHeader()
    {
        return $this->columnHeader;
    }

    public function setColumnHeader($columnHeader)
    {
        $this->columnHeader = $columnHeader;
        return $this;
    }

    public function getSortField()
    {
        return $this->sortField;
    }

    public function setSortField($field)
    {
        $this->sortField = $field;
        return $this;
    }

    public function isSortable()
    {
        return $this->sortable;
    }

    public function setSortable($sortable)
    {
        $this->sortable = $sortable;
        return $this;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function setRoute($route)
    {
        $this->route = $route;
    }

    public function getRouteParams()
    {
        return $this->routeParams;
    }

    public function setRouteParams($routeParams)
    {
        $this->routeParams = $routeParams;
    }

    public function getEmptyValue()
    {
        return $this->emptyValue;
    }

    public function setEmptyValue($emptyValue)
    {
        $this->emptyValue = $emptyValue;
        return $this;
    }

    public function getParentField()
    {
        return $this->parentField;
    }

    public function setParentField($parentField)
    {
        $this->parentField = $parentField;
        return $this;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

}