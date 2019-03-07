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

use rhoone\library\providers\huiwen\targets\MarcTarget as baseMarcTarget;

/**
 * Class MarcTarget
 * @package rhoone\library\targets
 * @author vistart <i@vistart.me>
 */
class MarcTarget extends baseMarcTarget
{
    /**
     * @var string
     */
    public $host = "webpac.lib.tongji.edu.cn";

    /**
     * @var string
     */
    public $relativeUrl = "/opac/item.php";
}
