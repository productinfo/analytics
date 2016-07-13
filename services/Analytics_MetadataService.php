<?php
/**
 * @link      https://dukt.net/craft/analytics/
 * @copyright Copyright (c) 2016, Dukt
 * @license   https://dukt.net/craft/analytics/docs/license
 */

namespace Craft;

class Analytics_MetadataService extends BaseApplicationComponent
{
    private $groups;
    private $dimensions;
    private $metrics;
    private $columns;
    private $selectDimensionOptions;
    private $selectMetricOptions;

    /**
     * Checks whether the dimensions & metrics file exists
     *
     * @return bool
     */
    public function dimmetsFileExists()
    {
        $path = craft()->analytics_metadata->getDimmetsFilePath();

        if(IOHelper::fileExists($path, false))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get Continent Code
     *
     * @param string $label
     */
    public function getContinentCode($label)
    {
        $continents = $this->getData('continents');

        foreach($continents as $continent)
        {
            if($continent['label'] == $label)
            {
                return $continent['code'];
            }
        }
    }

    /**
     * Get Sub-Continent Code
     *
     * @param string $label
     */
    public function getSubContinentCode($label)
    {
        $subContinents = $this->getData('subContinents');

        foreach($subContinents as $subContinent)
        {
            if($subContinent['label'] == $label)
            {
                return $subContinent['code'];
            }
        }
    }

    /**
     * Get a dimension or a metric label from its id
     *
     * @param string $id
     */
    public function getDimMet($id)
    {
        $columns = $this->getColumns();

        if(isset($columns[$id]))
        {
            return $columns[$id]->uiName;
        }
    }

    /**
     * Returns columns based on a search string `$q`
     *
     * @param string $q
     */
    public function searchColumns($q)
    {
        $columns = $this->getColumns();
        $results = [];

        foreach($columns as $column)
        {
            if(stripos($column->id, $q) !== false || stripos($column->uiName, $q) !== false)
            {
                $results[] = $column;
            }
        }

        return $results;
    }

    /**
     * Returns columns
     *
     * @param null $type
     *
     * @return array
     */
    public function getColumns($type = null)
    {
        if(!$this->columns)
        {
            $this->columns = $this->loadColumns();
        }

        if($type)
        {
            $columns = [];

            foreach($this->columns as $column)
            {
                if($column->type == $type)
                {
                    $columns[] = $column;
                }
            }

            return $columns;
        }
        else
        {
            return $this->columns;
        }
    }

    /**
     * Returns dimension columns
     *
     * @return array
     */
    public function getDimensions()
    {
        if(!$this->dimensions)
        {
            $this->dimensions = $this->getColumns('DIMENSION');
        }

        return $this->dimensions;
    }

    /**
     * Returns column groups
     *
     * @param null $type
     *
     * @return array
     */
    public function getGroups($type = null)
    {
        if($type && isset($this->groups[$type]))
        {
            return $this->groups[$type];
        }
        else
        {
            $groups = [];

            foreach($this->getColumns() as $column)
            {
                if(!$type || ($type && $column->type == $type))
                {
                    $groups[$column->group] = $column->group;
                }
            }

            if($type)
            {
                $this->groups[$type] = $groups;
            }

            return $groups;
        }
    }

    /**
     * Returns select dimension options
     *
     * @param null $filters
     *
     * @return array
     */
    public function getSelectDimensionOptions($filters = null)
    {
        if(!$this->selectDimensionOptions)
        {
            $this->selectDimensionOptions = $this->getSelectOptions('DIMENSION');
        }

        if($filters && is_array($filters))
        {
            $filteredOptions = [];

            foreach($this->selectDimensionOptions as $id => $option)
            {
                if(isset($option['optgroup']))
                {
                    $optgroup = null;
                    $lastOptgroup = $option['optgroup'];
                }
                else
                {
                    foreach($filters as $filter)
                    {
                        if($id == $filter)
                        {
                            if(!$optgroup)
                            {
                                $optgroup = $lastOptgroup;
                                $filteredOptions[]['optgroup'] = $optgroup;
                            }

                            $filteredOptions[$id] = $option;
                        }
                    }
                }
            }

            return $filteredOptions;
        }
        else
        {
            return $this->selectDimensionOptions;
        }
    }

    /**
     * Returns select metric options
     *
     * @param null $filters
     *
     * @return array
     */
    public function getSelectMetricOptions($filters = null)
    {
        if(!$this->selectMetricOptions)
        {
            $this->selectMetricOptions = $this->getSelectOptions('METRIC');
        }

        if($filters && is_array($filters))
        {
            $filteredOptions = [];

            foreach($this->selectMetricOptions as $id => $option)
            {
                if(isset($option['optgroup']))
                {
                    $optgroup = null;
                    $lastOptgroup = $option['optgroup'];
                }
                else
                {
                    foreach($filters as $filter)
                    {
                        if($id == $filter)
                        {
                            if(!$optgroup)
                            {
                                $optgroup = $lastOptgroup;
                                $filteredOptions[]['optgroup'] = $optgroup;
                            }

                            $filteredOptions[$id] = $option;
                        }
                    }
                }
            }

            return $filteredOptions;
        }
        else
        {
            return $this->selectMetricOptions;
        }
    }

    /**
     * Returns select options
     *
     * @param null $type
     * @param null $filters
     *
     * @return array
     */
    public function getSelectOptions($type = null, $filters = null)
    {
        $options = [];

        foreach($this->getGroups($type) as $group)
        {
            $options[]['optgroup'] = Craft::t($group);

            foreach($this->getColumns($type) as $column)
            {
                if($column->group == $group)
                {
                    $options[$column->id] = Craft::t($column->uiName);
                }
            }
        }


        // filters

        if($filters && is_array($filters))
        {
            $filteredOptions = [];

            foreach($options as $id => $option)
            {
                if(isset($option['optgroup']))
                {
                    $optgroup = null;
                    $lastOptgroup = $option['optgroup'];
                }
                else
                {
                    foreach($filters as $filter)
                    {
                        if($id == $filter)
                        {
                            if(!$optgroup)
                            {
                                $optgroup = $lastOptgroup;
                                $filteredOptions[]['optgroup'] = $optgroup;
                            }

                            $filteredOptions[$id] = $option;
                        }
                    }
                }
            }

            return $filteredOptions;
        }
        else
        {
            return $options;
        }
    }

    /**
     * Returns the metrics
     *
     * @return array
     */
    public function getMetrics()
    {
        if(!$this->metrics)
        {
            $this->metrics = $this->getColumns('METRIC');
        }

        return $this->metrics;
    }

    /**
     * Returns the file path of the dimensions-metrics.json file
     *
     * @return string
     */
    public function getDimmetsFilePath()
    {
        return CRAFT_PLUGINS_PATH.'analytics/etc/data/dimensions-metrics.json';
    }

    // Private Methods
    // =========================================================================

    /**
     * Loads the columns from the dimensions-metrics.json file
     *
     * @return array
     */
    private function loadColumns()
    {
        $cols = [];

        $path = craft()->analytics_metadata->getDimmetsFilePath();


        $json = IOHelper::getFileContents($path);
        $columnsResponse = JsonHelper::decode($json);

        if($columnsResponse)
        {
            foreach($columnsResponse as $columnResponse)
            {
                $cols[$columnResponse['id']] = new Analytics_ColumnModel($columnResponse);

                if($columnResponse['id'] == 'ga:countryIsoCode')
                {
                    $cols[$columnResponse['id']]->uiName = 'Country';
                }
            }
        }

        return $cols;
    }

    /**
     * Get Data
     *
     * @param string $label
     */
    private function getData($name)
    {
        $jsonData = file_get_contents(CRAFT_PLUGINS_PATH.'analytics/etc/data/'.$name.'.json');
        $data = json_decode($jsonData, true);

        return $data;
    }
}
