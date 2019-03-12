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

namespace rhoone\library\providers\huiwen\targets\tongjiuniversity\job;

use console\modules\spider\target\library\TongjiUniversity\models\Marc;
use rhoone\library\providers\huiwen\job\BatchAnalyzeToMongoDBJob as baseJob;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\DownloadedContent;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\MarcCopy;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\MarcNo;

/**
 * Class BatchAnalyzeToMongoDBJob
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity\job
 */
class BatchAnalyzeToMongoDBJob extends baseJob
{
    /**
     * @var string
     */
    public $downloadedContentClass = DownloadedContent::class;

    /**
     * @var string
     */
    public $marcNoClass = MarcNo::class;

    /**
     * @var string
     */
    public $marcCopyClass = MarcCopy::class;
}
