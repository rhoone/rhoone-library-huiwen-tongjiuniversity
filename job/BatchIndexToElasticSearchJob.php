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

use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\Marc;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\MarcCopy;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\MarcInfo;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\MarcNo;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\MarcStatus;
use rhoone\library\providers\huiwen\job\BatchIndexToElasticSearchJob as baseIndexJob;

/**
 * Class BatchIndexToElasticSearchJob
 * @package rhoone\library\providers\huiwen\job
 */
class BatchIndexToElasticSearchJob extends baseIndexJob
{
    /**
     * @var string
     */
    public $marcNoClass = MarcNo::class;

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
    public $marcStatusClass = MarcStatus::class;

    /**
     * @var string
     */
    public $indexClass = Marc::class;
}
