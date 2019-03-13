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

use rhoone\library\providers\huiwen\models\mongodb\MarcNo as huiwenMarcNo;

/**
 * Class MarcNo
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb
 */
class MarcNo extends huiwenMarcNo
{
    /**
     * @var string
     */
    public $marcStatusClass = MarcStatus::class;

    /**
     * @var string
     */
    public $marcCopyClass = MarcCopy::class;

    /**
     * @var string
     */
    public $marcInfoClass = MarcInfo::class;

    /**
     * @var string
     */
    public $downloadedContentClass = DownloadedContent::class;

    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['tongjiuniversity', 'marc_no'];
    }
}
