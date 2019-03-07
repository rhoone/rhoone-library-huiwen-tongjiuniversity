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

namespace rhoone\library\providers\huiwen\targets\tongjiuniversity\targets;

use rhoone\library\providers\huiwen\targets\CategoryTarget as baseCategoryTarget;

/**
 * Class CategoryTarget
 * @package rhoone\library\targets
 * @author vistart <i@vistart.me>
 */
class CategoryTarget extends baseCategoryTarget
{
    /**
     * @var string
     */
    public $host = "webpac.lib.tongji.edu.cn";

    /**
     * @var string
     */
    public $relativeUrl = "/browse/cls_browsing.php";
}
