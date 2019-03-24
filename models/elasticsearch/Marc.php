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

namespace rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch;

use rhoone\library\providers\huiwen\models\elasticsearch\Marc as huiwenMarc;

/**
 * Class Marc
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch
 */
class Marc extends huiwenMarc
{

    /**
     * @return string
     */
    public static function index()
    {
        return 'tongjiuniversity';
    }
}
