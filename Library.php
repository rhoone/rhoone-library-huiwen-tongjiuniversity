<?php

/**
 *  _   __ __ _____ _____ ___  ____  _____
 * | | / // // ___//_  _//   ||  __||_   _|
 * | |/ // /(__  )  / / / /| || |     | |
 * |___//_//____/  /_/ /_/ |_||_|     |_|
 * @link https://vistart.name/
 * @copyright Copyright (c) 2016-2018 vistart
 * @license https://vistart.name/license/
 */
namespace rhoone\library\providers\huiwen\targets\tongjiuniversity;

use rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\Marc;
use yii\elasticsearch\ActiveDataProvider;

/**
 * Class Library
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity
 */
class Library extends \rhoone\library\providers\huiwen\Library
{
    public $queryBuilderClass = QueryBuilder::class;

    public $marcClass = Marc::class;

    public static function getId()
    {
        return "tongjiuniversity-library";
    }
}
