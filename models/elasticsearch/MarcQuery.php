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

use rhoone\library\providers\huiwen\models\elasticsearch\MarcQuery as huiwenMarcQuery;

/**
 * Class MarcQuery
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch
 */
class MarcQuery extends huiwenMarcQuery
{
    /**
     * @param $marc_no
     * @return huiwenMarcQuery
     */
    public function marcNo($marc_no)
    {
        if (is_int($marc_no)) {
            $marc_no = sprintf("%010s", (string) $marc_no);
        }
        return parent::marcNo($marc_no);
    }
}