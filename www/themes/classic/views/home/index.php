<?php 
if (isset($_GET['sort_order'])) {
    $sort_order = $_GET['sort_order'];
} else {
    $sort_order = 'hits desc, createTime desc';
}
$dataProvider = $model->search($sort_order);
$data = $dataProvider->getData();
$page = $dataProvider->getPagination();
$sort = $dataProvider->getSort();
$page_count = floor($page->itemCount/$page->pageSize) + 1;
if (isset($_GET['Post_page'])) {
    $current_page = $_GET['Post_page'];
} else {
    $current_page = 1;
}
?>
<?php if (!isset($_GET['Post'])) {?>
            <div>
                <div class="container">
                    <div class="nr-top">
                        <div class="nr-top-1">
                            <ul>
                                <li class="nr-li1">分类：</li>
                                <li class="nr-li2">
                                    <a href="#" id="all" class="bgc">全部</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#" id="kg">幼儿园</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#" id="ps">小学</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#" id="ss">初中</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#" id="hs">高中</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nr-top-2">
                            <ul>
                                <li class="nr-li1">地区：</li>
                                <li class="nr-li2">
                                    <a href="#" class="bgc">全部</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">黄浦区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">徐汇区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">长宁区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">静安区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">普陀区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">闸北区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">卢湾区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">虹口区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">宝山区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">闵行区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">嘉定区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">松江区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">奉贤区</a>
                                </li>
                                <li class="nr-li3">
                                    <a href="#">青浦区</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nr-bottom">
                        <div class="div1">
                            <ul style="display: inline-block;">
                                <a href="<?php echo Yii::app()->createUrl("home/index");?>">
                                    <li class="" id="quanbu">全部 <img  style="margin-top: -2px; vertical-align: middle;" src="img/bjt.png" /></li>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl("home/index", array("sort_order"=>"createTime desc"));?>">
                                    <li class="" id="new">最新 <img style="margin-top: -2px; vertical-align: middle;" src="img/bjt.png" /></li>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl("home/index", array("sort_order"=>"hits desc"));?>">
                                    <li class="" id="hot">热门 <img style="margin-top: -2px; vertical-align: middle;" src="img/bjt.png" /></li>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl("home/index", array("sort_order"=>"sort desc"));?>">
                                    <li class="" id="deluxe">精华 <img style="margin-top: -2px; vertical-align: middle;" src="img/bjt.png" /></li>
                                </a>
                            </ul>
                            <span style="position: absolute; right: 10px; top: 5px;">
                            <span style="vertical-align: middle;" id="test11"><?php echo $current_page; ?>/<?php echo $page_count; ?></span>
                            <?php if ($current_page == 1) {?>
                            <img id="backward" style="cursor: pointer; vertical-align:middle;" src="img/zjt.jpg" />
                            <?php } else {?>
                            <a href="<?php echo Yii::app()->createUrl("home/index", array("Post_page"=>$current_page-1)); ?>">
                            <img id="backward" style="cursor: pointer; vertical-align:middle;" src="img/zjt.jpg" />
                            </a>
                            <?php }?>
                            <?php if ($current_page == $page_count) {?>
                            <img id="forward" style="cursor: pointer; vertical-align: middle;" src="img/yjt.jpg" />
                            <?php } else {?>
                            <a href="<?php echo Yii::app()->createUrl("home/index", array("Post_page"=>$current_page+1));?>">
                            <img id="forward" style="cursor: pointer; vertical-align: middle;" src="img/yjt.jpg" />
                            </a>
                            <?php } ?>
                            </span>
                        </div>
                        <div class="lb">
                        <?php if ($data) {?>
                            <?php foreach ($data as $v) {?>
                            <div class="lb1">
                                <div class="lb11">
                                    <img src="avatar_img/<?php echo CHtml::encode($v->user->avatar); ?>" />
                                </div>
                                <div class="lb1-2">
                                    <p>
                                        <a href="<?php echo $this->createUrl("home/index", array("Post[nodeId]"=>$v->nodeId));?>">
                                        <?php if (strlen($v->title) >= 60) {?>
                                        <?php echo CHtml::encode(substr($v->title, 0, 60)); ?>...
                                        <?php } else {?>
                                        <?php echo CHtml::encode($v->title);?>
                                        <?php }?>    
                                        </a>
                                    </p>
                                    <p class="1b-p">
                                        <span><img class="img11" src="img/bm.png"/></span><span class="span1"><?php echo CHtml::encode($v->user->username); ?></span>
                                        <span class="span2"><img class="img22" src="img/bt.png"/></span><span class="span3"><?php echo Util::tformat($v->createTime);?></span>
                                    </p>
                                    <p>浏览人数：<?php echo CHtml::encode($v->hits); ?>人看过</p>
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>
                        </div>
                    <div class="link-pager" style="text-align: center">
                    <?php $this->widget('CLinkPager', Util::page($page)); ?>
                    </div>
                        <div style="clear: both;"></div>
                        <!---->
                    </div>
                </div>
            </div>
<?php } else {?>
<div class="nr">
<div class="container">
    <div style="margin-top: 20px; margin-bottom: 20px">
    <a href="<?php echo $this->createUrl("home/index"); ?>"><span class="sps1">首页</span></a>
    <?php if ($node_name) {?>
        <a href="<?php echo $this->createUrl("home/index", array("Post[nodeId]"=>$node_name->id)) ?>">>
    <span class="sps2"><?php echo $node_name->name; ?></span></a>
   <?php }?>     
   </div>
</div>
<div class="container">
    <div>
        <span class="nr-sp"><?php echo $node_name->name; ?></span>
        <div class="nr-div">
            <p><a href=""><?php echo $site['post_today']; ?></a></p>
            <p>今日</p>
        </div>
        <div class="zx"></div>
        <div class="nr-div1">
            <p><a href=""><?php echo $site['post']; ?></a></p>
            <p>主题</p>
        </div>
        <div class="nr-div2">版主：admin</div>
    </div>
</div>
<div class="container" id="hot">
    <div class="nr-div3">交流各地教育，加强学生学习</div>
</div>
<div class="container">
<div class="content-left">
<div class="nr-bk1-1">
    <ul>
        <li><a href="">最新</a></li>
        <div style="vertical-align: middle; margin-left: 10px; width: 1px; height: 15px; border-left: 1px solid gray; display: inline-block;"></div>
        <li><a href="">全部</a></li>
        <div style="vertical-align: middle; margin-left: 10px; width: 1px; height: 15px; border-left: 1px solid gray; display: inline-block;"></div>
        <li><a href="">热门</a></li>
        <div style="vertical-align: middle; margin-left: 10px; width: 1px; height: 15px; border-left: 1px solid gray; display: inline-block;"></div>
    
    </ul>
</div>
<?php if ($data): ?>
<?php foreach ($data as $v): ?>
<div class="nr-bk1-3" onmouseover="addClass(this)" onmouseout="removeClass(this)">
    <div>
        <div class="nr-row-left">
            <img class="img1" src="avatar_img/<?php echo $v->user->avatar; ?>" style="width: 56px;"/>
            <span class="span1"><a href="<?php echo $this->createUrl("home/view", array("id" => $v->id)); ?>">                                        
            <?php if (strlen($v->title) >= 50) {?>
            <?php echo substr($v->title, 0, 45); ?>...
            <?php } else {?>
            <?php echo CHtml::encode($v->title);?>
            <?php }?> 
            </a></span>
            <img class="img1"  src="img/20161121153212.png" />
        </div>
        <div class="nr-row-right">
            <ul style=" display: inline-block;">
                <li style="position: relative;"><a href=""><?php echo CHtml::encode($v->user->username); ?></a><img style="position: absolute; top:0; left: -18px;" class="img2" id="img-min" src="img/bm.png" /></li>
                <div style="vertical-align: middle; margin-left: 5px;margin-right: 5px; width: 1px; height: 15px; border-left: 1px solid gray; display: inline-block;"></div>
                <li><a href="">回复：<?php echo$v->reply; ?></a></li>
                <div style="vertical-align: middle; margin-left: 5px;margin-right: 5px; width: 1px; height: 15px; border-left: 1px solid gray; display: inline-block;"></div>
                <li><a href="">浏览：<?php echo $v->hits; ?></a></li>
                <div style="vertical-align: middle; margin-left: 5px;margin-right: 5px;width: 1px; height: 15px; border-left: 1px solid gray; display: inline-block;"></div>
                <li><a href=""><?php echo Util::tformat($v->createTime); ?></a></li>
            </ul>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php else: ?>
    <div class="alert alert-warning">
        <span>暂时没有话题</span>
    </div>
    <?php $this->widget('CLinkPager', Util::page($page)); ?>
<?php endif;?>
<div class="link-page">
<?php $this->widget('CLinkPager', Util::page($page)); ?>
</div>
</div>
<div class="nr-bk2">
    <div class="nr-bk1-2-1-1">
        <div>
            <img src="img/bi.jpg"/>
        <?php if(isset($_GET['Post'])){?>
            <span><a href="<?php echo $this->createUrl("home/post"); ?>&node=<?php echo $_GET['Post']['nodeId'];?>">发新帖</a></span>
        <?php } else { ?>
            <span><a href="<?php echo $this->createUrl("home/post"); ?>">发新帖</a></span>
        <?php } ?>
        </div>
    </div>
    <div class="nr-bk1-2-1-2">
        <div class="nr-bk1-2-1-2-2">
            <div class="nr-bk1-2-1-2-1">热门论坛</div>
            <div style="margin-top: 15px; margin-bottom: 15px;">
                <a href=""><img style="width: 100%; height: 100%;" src="img/tu1.jpg"/></a>
            </div>
            <div style="height: 30px; border-bottom: 1px dashed darkgray;">
                <span class="ggz" ><a href="">插画，漫画</a></span>
                <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>
            </div>
                                    <div style="margin-top: 15px; margin-bottom: 15px;">
                <a href=""><img style="width: 100%; height: 100%;" src="img/tu2.jpg"/></a>
            </div>
            <div style="height: 30px; border-bottom: 1px dashed darkgray;">
                <span class="ggz"><a href="">美术吧</a></span>
                <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>
                
            </div>
                                    <div style="margin-top: 15px; margin-bottom: 15px;">
                <a href=""><img style="width: 100%; height: 100%;" src="img/tu3.jpg"/></a>
            </div>
            <div style="height: 30px; ">
                <span class="ggz"><a href="">多肉植物吧</a></span>
                <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>
                
            </div>
        </div>
    </div>
    <?php $this->widget("SideHotPostWidget"); ?>
</div>
</div>
</div>
<?php }?>
<script type="text/javascript">
    function addClass(x){
        x.className = "nr-bk1-3 bs";
    }

    function removeClass(x){
        x.className = "nr-bk1-3";
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#ps").click(function(){
            $(".lb").load("http://localhost/birdbbs/www/index.php?r=home/index&school=primary_school .lb1");
        });
        $("#kg").click(function(){
            $(".lb").load("http://localhost/birdbbs/www/index.php?r=home/index&school=kinder_garden .lb1");
        });
        $("#ss").click(function(){
            $(".lb").load("http://localhost/birdbbs/www/index.php?r=home/index&school=senior_school .lb1");
        });
        $("#hs").click(function(){
            $(".lb").load("http://localhost/birdbbs/www/index.php?r=home/index&school=high_school .lb1");
        });
        $("#all").click(function(){
            $(".lb").load("http://localhost/birdbbs/www/index.php?r=home/index .lb1");
        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var array = "<?php print_r($test_array);?>";
            console.log(array);
        });
</script>
<script type="text/javascript">
$(document).ready(function(){
    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); 
        var r = window.location.search.substr(1).match(reg);  
        if (r != null) return unescape(r[2]); return null; 
    }
    var page =  getUrlParam('sort_order');
    console.log(page === null);
    if (page === null) {
        $('#quanbu').addClass("nr-bottom-li1");
        $('#quanbu').css("color","#ff7012");
        $('#quanbu>img').attr('src', 'img/rjt.png');
    } else {
        switch (page) {
            case 'createTime+desc':
            $('#new').addClass("nr-bottom-li1");
            $('#new').css("color","#ff7012");
            $('#new>img').attr('src', 'img/rjt.png');
            break;
            case 'hits+desc':
            $('#hot').addClass("nr-bottom-li1");
            $('#hot').css("color","#ff7012");
            $('#hot>img').attr('src', 'img/rjt.png');
            break;
            case 'sort+desc':
            $('#deluxe').addClass("nr-bottom-li1");
            $('#deluxe').css("color","#ff7012");
            $('#deluxe>img').attr('src', 'img/rjt.png');
            break;
        }
    }
    $('#backward').mouseenter(function(){
        $(this).attr('src', 'img/rla.png')
    })
    $('#backward').mouseleave(function(){
        $(this).attr('src', 'img/zjt.jpg')
    })
})
</script>
