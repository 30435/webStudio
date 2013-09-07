<?php echo $this->headerString;?>
<div id="content" class="clearfix" >
    <div class="left">
        <div class="recommend bd">
            <h3 class="recommend_hd hd">常见问题</h3>
            <ul class="recommend_bd clearfix" >

                      <?php foreach($this->faq_arr as $v){?>
                        <li><a href="<?php echo $this->applicationInfos[3]['domain']?>/index/show/<?php echo $v['id']?>"><?php echo $v['question']?></a></li>
                        <?php }?>
                </li>
            </ul>
        </div>
        <!--END 推荐游戏结束-->
    </div>
    <!--END 左边结束-->
    <div class="right bd" >
            <div class="news">
                <div class="site hd"><span>当前位置：<a href="<?php echo $this->baseUrl;?>">首页</a> > 支付中心  > 常见问题</span></div>
                <div class="news_bd clearfix">
                  <h1><?php echo $this->contentInfo['question']; ?></h1>
                  <?php echo $this->contentInfo['answer']; ?>
                </div>
            </div>
        </div>
    <!--END 右边结束-->
</div>
<!--EDN 内容部分-->
<?php echo $this->footerString;?>