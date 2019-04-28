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
    public static function getId()
    {
        return "tongjiuniversity-library";
    }

    protected function buildQueryOptions()
    {
        return ([
            'highlight' => [
                'fields' => [
                    'titles.title' => [],
                ],
            ],
        ]);
    }

    public function search($keywords, array $config = null)
    {
        $queryArray = $this->buildQueryArray($keywords);
        $query = Marc::find()->query($queryArray)->explain(false)->options($this->buildQueryOptions());
        $provider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $provider;
    }

    /**
     * 构建检索条件矩阵。
     * @param string|array $keywords 关键词。若关键词是字符串，将转换为单元素数组。
     * @param null|array $fields 域键值对。
     * @return array 检索条件矩阵。
     */
    protected function buildQueryArray($keywords, $fields = null, $type = 'most_fields', $tie_breaker = 0.3, $minimum_should_match = '30%')
    {
        /**
         * 若 $fields 为空，将指定默认域和权重。
         */
        if (empty($fields)) {
            $fields = [
                'titles.value^5',
                'authors.author^5',
                'presses.press^3',
                'marc_no^2',
                'subjects.value^2',
                //'books.position^1.2',
                //'books.status^1.2',
                'copies.barcode^3.8',
                //'books.volume_period^1.2',
                //'classes.1^5',
                'copies.call_no^5',
                'ISBNs.value^2.8',
                //'abstract',
                //'target_readers',
                //'status',
            ];
        }

        return ([
            'multi_match' => [
                'query' => implode(' ', (array)$keywords),
                'type' => $type,
                'fields' => $fields,
                'tie_breaker' => $tie_breaker,
                'minimum_should_match' => $minimum_should_match,
            ]
        ]);
    }
}
