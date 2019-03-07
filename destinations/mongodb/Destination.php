<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016-2019 vistart
 * @license https://vistart.name/license/
 */

namespace rhoone\library\providers\huiwen\targets\tongjiuniversity\destinations\mongodb;

use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\DownloadedContent;

/**
 * Class Destination
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity\destinations\mongodb
 */
class Destination extends \rhoone\spider\destinations\mongodb\Destination
{
    /**
     * @var string the class of destination model implemented the `setDownloadedContent()` method.
     */
    public $modelClass = DownloadedContent::class;
}