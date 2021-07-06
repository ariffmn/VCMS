<?php
/** @var $dataProvider ActiveDataProvider */

use yii\bootstrap4\LinkPager;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

$this->title = 'Popular videos | '. Yii::$app->name;
?>
<h1>Found Videos</h1>
<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
        'class' => LinkPager::class,
    ],
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>
