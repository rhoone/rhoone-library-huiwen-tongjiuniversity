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

    /**
     * @param string $keyword
     * @param array|null $config
     * @return models\elasticsearch\MarcQuery|void
     */
    public function queryCallNo(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildWildcardQueryClause('copies.call_no', "*$keyword*")
            ]))
            ->explain(true);
        return $query;
    }

    /**
     * @param string $ISBN
     * @param array|null $config
     * @return models\elasticsearch\MarcQuery|void
     */
    public function queryISBN(string $keyword, array $config = null)
    {
        $config['keywords'] = str_replace([' ', '-'], '', $keyword);
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildWildcardQueryClause('ISBNs.compressed', sprintf("*%s*", str_replace([' ', '-'], '', $keyword)))
            ]))
            ->explain(true);
        return $query;
    }

    /**
     * @param string $keyword
     * @param array|null $config
     * @return models\elasticsearch\MarcQuery|void
     */
    public function queryBarcode(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildWildcardQueryClause('copies.barcode', "*$keyword*")
            ]))
            ->explain(true);
        return $query;
    }

    /**
     * @param string $keyword
     * @param array|null $config
     * @return models\elasticsearch\MarcQuery|void
     */
    public function queryMarcNo(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildTermQueryClause('marc_no', "$keyword")
            ]))
            ->explain(true);
        return $query;
    }

    /**
     * @param string $keyword
     * @param array|null $config
     * @return models\elasticsearch\MarcQuery
     */
    public function queryTitle(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildMatchPhraseClause('titles.value', "$keyword")
            ]))
            ->explain(true);
        return $query;
    }

    /**
     * @param string $keyword
     * @param array|null $config
     * @return models\elasticsearch\MarcQuery
     */
    public function queryAuthor(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildMatchPhraseClause('authors.author', "$keyword")
            ]))
            ->explain(true);
        return $query;
    }

    /**
     * @param string $keyword
     * @param array|null $config
     * @return models\elasticsearch\MarcQuery
     */
    public function queryPress(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildMatchPhraseClause('presses.press', "$keyword")
            ]))
            ->explain(true);
        return $query;
    }

    public function querySubject(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildTermQueryClause('subjects.value', "$keyword")
            ]))
            ->explain(true);
        return $query;
    }

    public function queryNote(string $keyword, array $config = null)
    {
        $config['keywords'] = $keyword;
        $queryBuilder = new $this->queryBuilderClass($config);
        /* @var $queryBuilder QueryBuilder */
        /* @var $query \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\MarcQuery */
        $query = $this->marcClass::find()
            ->query($queryBuilder->buildBoolQuery([
                $queryBuilder->buildMatchPhraseClause('notes.value', "$keyword")
            ]))
            ->explain(true);
        return $query;
    }
}
