<?php 

class SideHotPostWidget extends CWidget {

    public function run()
    {
        $hours24ago = time() - 100*3600;

        $criteria = new CDbCriteria;
        $criteria->select = "id, title, hits";
        $criteria->compare('status', Post::STATUS_NORMAL);
        $criteria->compare('createTime', "> {$hours24ago}");
        $criteria->order = "hits desc";
        $criteria->limit = 10;

        $post = Post::model()->findAll($criteria);
        $this->render("sidehotpost", array(
            'post' => $post,
        ));
    }
}