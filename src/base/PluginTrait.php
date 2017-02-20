<?php
/**
 * @link      https://dukt.net/craft/analytics/
 * @copyright Copyright (c) 2017, Dukt
 * @license   https://dukt.net/craft/analytics/docs/license
 */

namespace dukt\analytics\base;

use dukt\analytics\Plugin as Analytics;

trait PluginTrait
{
    /**
     * Returns the analytics service.
     *
     * @return \dukt\analytics\services\Analytics The analytics service
     */
    public function getAnalytics()
    {
        /** @var Analytics $this */
        return $this->get('analytics');
    }

    /**
     * Returns the api service.
     *
     * @return \dukt\analytics\services\Api The api service
     */
    public function getApi()
    {
        /** @var Analytics $this */
        return $this->get('api');
    }

    /**
     * Returns the cache service.
     *
     * @return \dukt\analytics\services\Cache The cache service
     */
    public function getCache()
    {
        /** @var Analytics $this */
        return $this->get('cache');
    }

    /**
     * Returns the metadata service.
     *
     * @return \dukt\analytics\services\Metadata The metadata service
     */
    public function getMetadata()
    {
        /** @var Analytics $this */
        return $this->get('metadata');
    }

    /**
     * Returns the oauth service.
     *
     * @return \dukt\analytics\services\Oauth The oauth service
     */
    public function getOauth()
    {
        /** @var Analytics $this */
        return $this->get('oauth');
    }

    /**
     * Returns the reports service.
     *
     * @return \dukt\analytics\services\Reports The reports service
     */
    public function getReports()
    {
        /** @var Analytics $this */
        return $this->get('reports');
    }
}
