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

use rhoone\library\providers\huiwen\models\mongodb\DownloadedContent as HuiwenDownloadedContent;

/**
 * This is the model class for collection "downloaded_content".
 *
 */
class DownloadedContent extends HuiwenDownloadedContent
{
    /**
     * {@inheritdoc}
     */
    public static function collectionName()
    {
        return ['tongjiuniversity', 'downloaded_content'];
    }
}
