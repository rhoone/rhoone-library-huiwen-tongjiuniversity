<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.me/
 * @copyright Copyright (c) 2016 - 2019 vistart
 * @license https://vistart.me/license/
 */

namespace rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb;

use rhoone\library\providers\huiwen\models\mongodb\MarcStatus as huiwenMarcStatus;

/**
 * Class MarcStatus
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb
 */
class MarcStatus extends huiwenMarcStatus
{
    /**
     * @var string
     */
    public $marcNoClass = MarcNo::class;
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['tongjiuniversity', 'marc_status'];
    }
}
