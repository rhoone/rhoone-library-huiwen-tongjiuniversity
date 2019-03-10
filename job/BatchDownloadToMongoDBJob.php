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

namespace rhoone\library\providers\huiwen\targets\tongjiuniversity\job;

use \rhoone\library\providers\huiwen\job\BatchDownloadToMongoDBJob as baseJob;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\destinations\mongodb\Destination;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\mongodb\DownloadedContent;
use rhoone\library\providers\huiwen\targets\tongjiuniversity\targets\MarcTarget;
use rhoone\library\targets\Target;
use yii\di\Instance;

/**
 * Class BatchDownloadToMongoDBJob
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity\job
 */
class BatchDownloadToMongoDBJob extends baseJob
{
    /**
     * @var string
     */
    public $destinationClass = Destination::class;

    /**
     * @var string
     */
    public $downloadedContentClass = DownloadedContent::class;

    /**
     * @var Target
     */
    public $target = MarcTarget::class;

    /**
     * @throws \yii\base\InvalidConfigException
     */
    protected function prepareTarget()
    {
        $this->target = Instance::ensure($this->target, Target::class);
        $this->urlTemplate = $this->target->getAbsoluteUrl(['marc_no' => '{%marc_no}']);
        $this->keyAttribute = 'marc_no';
    }

    /**
     *
     */
    public function init()
    {
        $this->prepareTarget();
        parent::init();
    }
}