<?php 

class HomeController extends FrontController
{
    
    /**
     * [filters description]
     * @return [type] [description]
     */
    public function filters()
    {
        return array('accessControl');
    }

    /**
     * [accessRules description]
     * @return [type] [description]
     */
    public function accessRules()
    {
        return array(
            array(
                'deny',
                'actions' => array('post', 'user', 'comment', 'delete', 'delcomment', 'info', 'password'),
                'users' => array('?'),
            ),
            array(
                'deny',
                'actions' => array('view'),
                'users' => array('?'),
                'verbs' => array('POST'),
            ),
        );
    }

    /**
     * [actionPost description]
     * @return [type] [description]
     */
    public function actionPost()
    {
        $this->pageTitle = Yii::t('zh_CN', 'PAGE_TITLE_POST');
        
        $model = new Post('post');

        if (isset($_GET['node'])) {
            $nodeId = $_GET['node'];
        }

        if (isset($_POST['Post'])) {
            
            $model->attributes = $_POST["Post"];
            $model->userId = (int) Yii::app()->user->id;

            if ($model->save()) {
                $this->redirect($this->createUrl("home/view", array("id" => $model->id)));
            }
        }

        $nodes = Node::model()->findAllByAttributes(array(
            "status" => Node::STATUS_NORMAL,
        ));

        $this->render("post", array(
            "model" => $model,
            "nodes" => $nodes,
        ));
    }

    /**
     * [actionIndex description]
     * @return [type] [description]
     */
    public function actionIndex()
    {

        $this->pageTitle = Yii::t('zh_CN', 'PAGE_TITLE_INDEX');

        $nodes = Node::model()->findAllByAttributes(array(
            "status" => Node::STATUS_NORMAL,
        ));

        if (isset($_GET['Post'])) {
            $node_name = Node::model()->findByPk($_GET['Post']['nodeId']);
        } else {
            $node_name = '';
        }



        $model = new Post('search');
        $model->unsetAttributes();

        if (isset($_GET['Post'])) {
            $model->attributes = $_GET['Post'];
        }

        // if (isset($_GET['nodeId'])) {
        //     $model->attributes['nodeId'] = $_GET['nodeId'];
        // }
        
        $model->status = Post::STATUS_NORMAL;

        $site['post'] = Post::model()->count();
        // get today's post
        $yesterday = time() - 24*3600;
        $criteria = new CDbCriteria;
        $criteria->compare('createTime', "> {$yesterday}");
        //$criteria->addSearchCondition("description", "primary_school");
        $site['post_today'] = Post::model()->count($criteria);
        if (isset($_GET['school'])) {
            $school = $_GET['school'];
            $criteria1 = new CDbCriteria;
            $criteria1->addSearchCondition("description", $school);
            $result = Node::model()->findAll($criteria1);
            if ($result) {
                $model->nodeId = $result[0]->id;
            } else {
                $model->nodeId = 0;
            }
            
        }


        $this->render("index", array(
            "nodes" => $nodes,
            "site"  => $site,
            "model" => $model,
            //"result" => $result,
            "node_name" => $node_name,
            //"attributes" => $attributes,
        ));
    }

    /**
     * [actionLogin description]
     * @return [type] [description]
     */
    public function actionLogin()
    {
        $this->pageTitle = Yii::t('zh_CN', 'PAGE_TITLE_LOGIN');
        $this->layout = "//layouts/default";

        $model = new LoginForm;
        if (isset($_POST['LoginForm'])) {
            
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate() && $model->login()) {

                User::model()->updateByPk(Yii::app()->user->id, array(
                    'lastIp' => Yii::app()->request->userHostAddress
                ), 'id = ' . Yii::app()->user->id);

                $this->redirect(array("home/index"));
            }
        }

        $this->render("login", array(
            'model' => $model,
        ));
    }

    /**
     * [actionRegister description]
     * @return [type] [description]
     */
    public function actionRegister()
    {
        $this->pageTitle = Yii::t('zh_CN', 'PAGE_TITLE_REGISTER');
        $this->layout = "//layouts/default";

        $model = new User('register');
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                $model->password = CPasswordHelper::hashPassword($model->password);
                if ($model->save(false)) {
                    Yii::app()->user->setFlash(':notice', Yii::t('zh_CN', 'OPTS_SUCCESS'));
                    $this->redirect($this->createUrl("home/login"));
                }
            }
        }

        $this->render("register", array(
            'model' => $model,
        ));
    }

    /**
     * [actionView description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function actionView($id) {
        
        $userId = (int) Yii::app()->user->id;
        $post = Post::model()->findByPk($id);
        if (empty($post) || $post->status != Post::STATUS_NORMAL) {
            throw new CHttpException(404, Yii::t('zh_CN', 'HTTP_STATUS_404'));
        }
        $node_name = Node::model()->findByPk($post->nodeId);
        $comment = new Comment('post');
        if (isset($_POST['Comment'])) {
            $comment->attributes = $_POST['Comment'];
            $comment->userId = $userId;
            if ($comment->save()) {
                $post->lastUpdateUserId = $userId;
                $post->reply += 1;
                $post->save();
                $this->redirect(array('home/view', 'id' => $post->id, '#'=>'go'.$comment->id));
            }
        }
        $site['post'] = Post::model()->count();
        // get today's post
        $yesterday = time() - 24*3600;
        $criteria = new CDbCriteria;
        $criteria->compare('createTime', "> {$yesterday}");
        $site['post_today'] = Post::model()->count($criteria);

        $this->pageTitle = $post->title;
        $this->render("view", array(
            "model" => $post,
            "comment" => $comment,
            "site" => $site,
            "node" => $node_name,
        ));
    }

    /**
     * [actionLogout description]
     * @return [type] [description]
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect($this->createUrl("home/index"));
    }

    /**
     * [actionUser description]
     * @return [type]     [description]
     */
    public function actionUser()
    {   
        $this->pageTitle = Yii::t('zh_CN', 'PAGE_TITLE_MY_POST');
        $userId = (int) Yii::app()->user->id;
        $model = new Post('search');
        $model->unsetAttributes();
        if (isset($_GET['Post'])) {
            $model->attributes = $_GET['Post'];
        }

        $model->userId = $userId;
        $model->status = Post::STATUS_NORMAL;

        $this->render("user", array(
            'model' => $model,
        ));
    }

    /**
     * [actionComment description]
     * @return [type] [description]
     */
    public function actionComment()
    {
        $this->pageTitle = Yii::t('zh_CN', 'PAGE_TITLE_MY_COMMENT');
        $userId = (int) Yii::app()->user->id;
        $model = new Comment('search');
        $model->unsetAttributes();
        if (isset($_GET['Comment'])) {
            $model->attributes = $_GET['Comment'];
        }

        $model->userId = $userId;

        $this->render("comment", array(
            'model' => $model,
        ));
    }

    /**
     * [actionDelcomment description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function actionDelcomment($id)
    {
        $userId = (int) Yii::app()->user->id;

        $model = Comment::model()->findByPk($id);
        if (empty($model)) {
            throw new CHttpException(404, Yii::t('zh_CN', 'HTTP_STATUS_404'));
        }

        if ($model->userId == $userId) {
            $postId = $model->postId;
            $model->delete();
            $this->redirect($this->createUrl("home/view", array("id" => $postId)));
        }

        else {
            throw new CHttpException(403, Yii::t('zh_CN', 'HTTP_STATUS_403'));
        }
    }

    /**
     * 删帖子
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function actionDelete($id)
    {
        $userId = (int) Yii::app()->user->id;
        $model = Post::model()->findByPk($id);
        if (empty($model)) {
            throw new CHttpException(404, Yii::t('zh_CN', 'HTTP_STATUS_404'));
        }

        if ($model->userId == $userId) {
            $model->status = Post::STATUS_FROZEN;
            $model->save();
            $this->redirect($this->createUrl("home/user"));
        }

        else {
            throw new CHttpException(403, Yii::t('zh_CN', 'HTTP_STATUS_403'));
        }
    }

    /**
     * 浏览器支持情况
     * @return [type] [description]
     */
    public function actionBrowser()
    {
        $this->renderPartial("browser");
    }

    /**
     * 用户资料信息
     * @return [type] [description]
     */
    public function actionInfo()
    {
        $uid = Yii::app()->user->id;
        $model = User::model()->findByPk($uid);
        if (empty($model)) {
            throw new CHttpException(404, Yii::t('zh_CN', 'HTTP_STATUS_404'));
        }

        $model->setScenario('update');

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $image = CUploadedFile::getInstanceByName('User[image]');
            $image->saveAs('avatar_img/'.time().$image->name);
            $model->avatar = time().$image->name;
            if ($model->save()) {
                Yii::app()->user->setFlash(":notice", Yii::t('zh_CN', 'OPTS_SUCCESS'));
                $this->redirect($this->createUrl('home/info'));
            }
        }

        $this->render("info", array(
            'model' => $model,
        ));
    }


    /**
     * [actionPassword description]
     * @return [type] [description]
     */
    public function actionPassword()
    {   

        $uid = Yii::app()->user->id;
        $model = User::model()->findByPk($uid);
        if (empty($model)) {
            throw new CHttpException(404, Yii::t('zh_CN', 'HTTP_STATUS_404'));
        }

        $model->setScenario('password');

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                $model->password = CPasswordHelper::hashPassword($model->password);
                if ($model->save(false)) {
                    Yii::app()->user->setFlash(":notice", Yii::t('zh_CN', 'OPTS_SUCCESS'));
                    Yii::app()->user->logout();
                    $this->redirect($this->createUrl('home/login'));
                }
                else {
                    Yii::app()->user->setFlash(":notice", Yii::t('zh_CN', 'OPTS_FAILED')); 
                    $this->redirect($this->createUrl('home/password'));
                }
            }
        }

        $this->render("password", array(
            'model' => $model,
        ));
    }

    //hot posts for iframe on the index
    public function actionHot()
    {
        $hours24ago = time() - 100*3600;

        $criteria = new CDbCriteria;
        $criteria->select = "id, title, hits";
        $criteria->compare('status', Post::STATUS_NORMAL);
        $criteria->compare('createTime', "> {$hours24ago}");
        $criteria->order = "hits desc";
        $criteria->limit = 10;

        $post = Post::model()->findAll($criteria);
        $this->render("hot", array(
            'post' => $post,
            ));
    }
}