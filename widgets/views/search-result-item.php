<?php
/**
 *
 *    _   __ __ _____ _____ ___  ____  _____
 *   | | / // // ___//_  _//   ||  __||_   _|
 *   | |/ // /(__  )  / / / /| || |     | |
 *   |___//_//____/  /_/ /_/ |_||_|     |_|
 *   @link https://vistart.name/
 *   @copyright Copyright (c) 2019 vistart
 *   @license https://vistart.name/license/
 *
 */


/* @var \rhoone\library\providers\huiwen\targets\tongjiuniversity\models\elasticsearch\Marc $item */
$baseUrl = 'http://webpac.lib.tongji.edu.cn/opac/item.php?marc_no=';
$bundle = \common\assets\CommonAsset::register($this);
?>

<li>
    <div class="media">
        <div class="pull-right memberActions">
            <a class="btn btn-primary btn-sm followButton" href="<?= $baseUrl . $item->marc_no ?>" target="_blank">前往</a>
        </div>

        <span class="pull-left"><a href="#"><img class="img-rounded" src="<?= $bundle->baseUrl ?>/img/book.jpg" alt="#" style="width: 50px; height: 50px"></a></span>
        <div class="media-body">
            <h4 class="media-heading">
                <a href="<?= $baseUrl . $item->marc_no ?>" target="_blank"><?= $item->titles[0]['value'] ?></a>
                <?php if (!empty($item->authors)): ?>
                    <small><?php
                        $authors = "";
                        foreach ($item->authors as $author) {
                            $authors .= $author['author'] . ' ' . $author['duty'] . '; ';
                        }
                        echo $authors;
                        ?></small>
                <?php endif; ?>
            </h4>
            <?php if (!empty($item->presses)): ?>
                <h5><?php
                    $presses = "";
                    foreach ($item->presses as $press) {
                        $presses .= $press['location'] . ':' . $press['press'] . ',' . $press['date'] . '; ';
                    }
                    echo $presses;
                    ?></h5>
            <?php endif; ?>
            <?php if (!empty($item->ISBNs)) :?>
                <h5><?php
                    $ISBNs = "";
                    foreach ($item->ISBNs as $ISBN) {
                        $ISBNs .= $ISBN['key'] . ":" . $ISBN['value'] . '; ';
                    }
                    echo $ISBNs;
                    ?></h5>
            <?php endif; ?>
            <?php if (!empty($item->notes)): ?>
                <?php foreach ($item->notes as $note): ?>
                    <h5><b><?= $note['key'] . ':'?></b><?= $note['value'] ?></h5>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php if (!empty($item->subjects)): ?>
                <?php foreach ($item->subjects as $subject): ?>
                    <a class="label label-default" href="#"><?= $subject['value'] ?></a>&nbsp;
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="well well-small comment-container">
                <?php if (!empty($item->copies)): ?>
                    <?php foreach ($item->copies as $book): ?>
                        <div class="comment">
                            <div class="media">
                                <div class="content comment_edit_content">
                                    <div class="comment-message row">
                                        <div class="col-md-2 col-sm-3 col-xs-6"><?= $book['call_no'] ?></div>
                                        <div class="col-md-2 col-sm-3 col-xs-6"><?= $book['barcode'] ?></div>
                                        <div class="col-md-4 col-sm-6 col-xs-12"><?= $book['position'] ?></div>
                                        <div class="col-md-2 col-sm-6 col-xs-6"><?= $book['volume_period'] ?></div>
                                        <div class="col-md-2 col-sm-6 col-xs-6"
                                            <?php if ($book['status'] == '可借'): ?>
                                                style="color: green"
                                            <?php endif; ?>
                                            <?php if (strpos($book['status'], '借出') === 0): ?>
                                                style="color: red"
                                            <?php endif; ?>
                                        ><?= $book['status'] ?></div>
                                    </div>
                                </div>
                                <?php if ($book != end($item->copies)):?>
                                    <hr>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>此书刊没有副本。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</li>
