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
namespace rhoone\library\providers\huiwen\targets\tongjiuniversity;

use rhoone\library\providers\huiwen\targets\tongjiuniversity\widgets\SearchResultItems;
use yii\elasticsearch\ActiveDataProvider;

/**
 * Class Extension
 * @package rhoone\library\providers\huiwen\targets\tongjiuniversity
 */
class Extension extends \rhoone\library\providers\huiwen\Extension
{
    public function init()
    {
        if (empty($this->libraryClass)) {
            $this->libraryClass = Library::class;
        }
    }

    public static function id()
    {
        return 'tongjiuniversity-library';
    }

    public static function name()
    {
        return '同济大学图书馆';
    }

    /**
     * @param mixed $keywords
     * @param mixed $config
     * @return string
     * @throws \Exception
     */
    public function search($keywords, $config = [])
    {
        $library = new $this->libraryClass;
        /* @var $library Library */
        $provider = $library->search($keywords, $config);
        /* @var $provider ActiveDataProvider */
        return SearchResultItems::widget(['provider' => $provider]);
    }

    /**
     * Get module configuration array.
     * @return array module configuration array.
     */
    public static function getModule()
    {
        return [
            'class' => Module::class,
            'id' => 'tongjiuniversity-library',
        ];
    }
}
