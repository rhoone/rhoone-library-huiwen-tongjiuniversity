<?php

/**
 *
 *    _   __ __ _____ _____ ___  ____  _____
 *   | | / // // ___//_  _//   ||  __||_   _|
 *   | |/ // /(__  )  / / / /| || |     | |
 *   |___//_//____/  /_/ /_/ |_||_|     |_|
 *   @link https://vistart.name/
 *   @copyright Copyright (c) 2016 vistart
 *   @license https://vistart.name/license/
 *
 */
namespace rhoone\library\providers\huiwen\targets\tongjiuniversity;

/**
 * Build Query Array for ElasticSearch.
 * @property-read array $queryArray
 * @property-read array $queryOptions
 * @property string $keywords
 * @property string[] $seperatedKeywords
 *
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity
 */
class QueryBuilder extends \rhoone\library\providers\huiwen\QueryBuilder
{
    /**
     * @param array $keywords
     * @return array
     */
    protected function selectMarcNo(array $keywords)
    {
        $marcNo10Regex = '/^000\d{7}$/';
        $pointers = [];
        foreach ($keywords as $i => $keyword)
        {
            if (strlen($keyword) == 10 && preg_match($marcNo10Regex, $keyword))
            {
                $pointers[] = $i;
            }
        }
        \Yii::info("MARC NO Pointers in Keyword Array: " . implode(", ", $pointers));
        return $pointers;
    }

    /**
     * @param array $keywords
     * @return array
     */
    protected function selectBarcode(array $keywords)
    {
        $barcode10Regex = '/^[a-zA-Z0-9]{2}\d{6}$/';
        $pointers = [];
        foreach ($keywords as $i => $keyword)
        {
            if (strlen($keyword) == 8 && preg_match($barcode10Regex, $keyword))
            {
                $pointers[] = $i;
            }
        }
        \Yii::info("Barcode Pointers in Keyword Array: " . implode(", ", $pointers));
        return $pointers;
    }

    /**
     * @param array $keywords
     * @return array
     */
    protected function selectCallNo(array $keywords)
    {
        $classRegex = '/^{?\[?([A-K]|[N-V]|X|Z)[A-U]?\d{0,3}(?:\/\d{1,3})?a?(?:[.|\-|=|+]\d{1,3}|\(\d{1,3}\)|"\d{1,3}"|<\d{1,3}>)*\]?(?:}<(?:\[?([A-K]|[N-V]|X|Z)[A-U]?\d{0,3}(?:\/\d{1,3})?a?(?:[.|\-|=|+]\d{1,3}|\(\d{1,3}\)|"\d{1,3}"|<\d{1,3}>)*\]?)>)?(?:[:+](?:{?\[?([A-K]|[N-V]|X|Z)[A-U]?\d{0,3}(?:\/\d{1,3})?a?(?:[.|\-|=|+]\d{1,3}|\(\d{1,3}\)|"\d{1,3}"|<\d{1,3}>)*\]?(?:}<(?:\[?([A-K]|[N-V]|X|Z)[A-U]?\d{0,3}(?:\/\d{1,3})?a?(?:[.|\-|=|+]\d{1,3}|\(\d{1,3}\)|"\d{1,3}"|<\d{1,3}>)*\]?)>)?))*$/';
        $pointers = [];
        foreach ($keywords as $i => $keyword)
        {
            $seperated = explode('/', $keyword);
            if (empty($seperated)) {
                continue;
            }
            if (!preg_match($classRegex, $seperated[0], $matches)) {
                continue;
            }
            if ($matches[0] != $seperated[0]) {
                continue;
            }
            \Yii::info("Call No Matched: " . $keyword);
            $pointers[] = $i;
        }
        \Yii::info("Call No Pointers in Keyword Array: " . implode(", ", $pointers));
        return $pointers;
    }
}
