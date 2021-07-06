<?php
/** @var $dataProvider ActiveDataProvider */

use yii\bootstrap4\LinkPager;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

$this->title = 'Recently Visited Videos | '. Yii::$app->name;
?>
<h1>My History</h1>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>
