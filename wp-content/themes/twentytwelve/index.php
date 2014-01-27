<?php 
	get_header();
?>


    <div class="content cl">
    	<div class="content_left fl">
    		<?php get_sidebar()?>
        </div>
        <div class="content_right fl">
            <div class="news">
            	<div id="new_top">
                    <div id="n_div">
                    <?php if (function_exists('show_skitter')) show_skitter();?>
                    </div>
                </div>
            </div>
            <div id="hotnews">
                <div id="h_top" class="mau">
                   <div class="top_unit fl title_color "><img src="<?php bloginfo('template_directory')?>/images/announce.png" class="fl" alt="" />  公告栏<a href="<?php bloginfo('wpurl')?>/?cat=6" class="more">more</a></div>
                   <img src="<?php bloginfo('template_directory')?>/images/hot_line.png" class="fl">
                    <div class="top_unit fl title_color "><img src="<?php bloginfo('template_directory')?>/images/hot.png" class="fl" alt="" />  热点新闻<a href="<?php bloginfo('wpurl')?>/?cat=3" class="more">more</a></div>
                </div>
                <div class="h_content bor fl">
                    <marquee onmouseover=this.stop() onmouseout=this.start() scrollAmount=2 scrollDelay=100 direction=up height="99%">
                    <?php $announcements = get_posts( "category=6&numberposts=10" ); ?>
                    <?php if ($announcements):?>
                    	<?php foreach ($announcements as $post):setup_postdata($post)?>
	                   		<p><a href="<?php the_permalink()?>" class="fl"><?php the_title()?></a></p>
	                    <?php endforeach;?>
	                <?php endif;?>
                    </marquee>
                </div>
                 <div class="h_content fl">
                 	<?php $news = get_posts( "category=3&numberposts=10" ); ?>
                    <?php if ($news):?>
                    	<?php foreach ($news as $post):setup_postdata($post)?>
	                   		<p><a href="<?php the_permalink()?>" class="fl"><?php the_title()?></a></p>
	                    <?php endforeach;?>
	                <?php endif;?>
                </div>
            </div>
        </div>
        <div class="contentbt_left fl">
            <div class="people">
                <div class="people_title">
                    <ul>
                        <li class="fl"><a href="#">西语人物</a></li>
                        <li class="fl"><img class="fl" src="<?php bloginfo('template_directory')?>/images/fc_li_border.png" /><a href="#">西语印象</a></li>
                        <li class="fl"><img class="fl" src="<?php bloginfo('template_directory')?>/images/fc_li_border.png" /><a href="#">班级之窗</a></li>
                        <li class="fl"><img class="fl" src="<?php bloginfo('template_directory')?>/images/fc_li_border.png" /><a href="#">师生园地</a></li>  
                    </ul>
                    <a class="more_a fr people_more" href="#">more</a>
                </div>
                <div class="peopleout">
                    <div class="peopleinner">
                        <div class="pic fl">
                            <img alt="西语人物" src="<?php bloginfo('template_directory')?>/images/fcimg.png" class="p_img" />
                        </div>
                        <div class="passage fl">
                            <a class="title" href="#">上帝与我同在——读《基督山伯爵》有感</a><br/>
                            <a class="text" href="#">我一直想象着书中那个场景：当主人翁爱德蒙·唐泰斯被
                            "朋友"出卖而囚于臭名昭著的孤岛监狱时，"上帝看到了一切，我是无辜的！"他愤怒地吼
                            着，震响了冰凉的镣铐。"每个人都这么说"狱长冷冷地笑道，
                            </a><br/>
                            <div class="date fr">2012-12-02</div>         
                        </div>        
                        <ul class="fl">
                            <li><img src="<?php bloginfo('template_directory')?>/images/fc_li_img.png" class="fl"><a class="news fl" href="#">硝烟荏苒 歌声仍旧——记Taylor Swift &lt;Safe and Sound&gt;</a><span class="date fr">2012-12-02</span></li>
                            <li><img src="<?php bloginfo('template_directory')?>/images/fc_li_img.png" class="fl" /><a class="news fl" href="#">JA广外2012志愿者日之事业启航工2012志愿者日之事业启航工作坊学员招募！</a><span class="date fr">2012-12-02</span></li>
                            <li><img src="<?php bloginfo('template_directory')?>/images/fc_li_img.png" class="fl" /><a class="news fl" href="#">太平洋的风——评台湾电影《练习曲》</a><span class="date fr">2012-12-02</span></li>
                            <li><img src="<?php bloginfo('template_directory')?>/images/fc_li_img.png" class="fl" /><a class="news fl" href="#">金融辩论赛</a><span class="date fr">2012-12-02</span></li>
                            <li><img src="<?php bloginfo('template_directory')?>/images/fc_li_img.png"  class="fl"/><a class="news fl" href="#">深井古村落游记</a><span class="date fr">2012-12-02</span></li>
                            <li><img src="<?php bloginfo('template_directory')?>/images/fc_li_img.png"  class="fl"/><a class="news fl" href="#">JA广外2012志愿者日之事业启航工作坊学员招募！</a><span class="date fr">2012-12-02</span></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <div class="contentbt_right fl">
            <dl id="teacher" class=" title_color ">
                <dt><p><span>名师风采</span><a href="#" class="more">more</a></p></dt>
                <div id="teacher2">
                <ul>
                    <li><a href=""><img src="<?php bloginfo('template_directory')?>/images/people1.png" alt="" class="timg"/>李心广&nbsp教授</a></li>
                    <li><a href=""><img src="<?php bloginfo('template_directory')?>/images/people2.png" alt=""  class="timg"/>路美秀&nbsp教授</a></li>
                    <li><a href=""><img src="<?php bloginfo('template_directory')?>/images/people3.png" alt=""  class="timg"/>罗海涛&nbsp教授</a></li>
                    <li><a href=""><img src="<?php bloginfo('template_directory')?>/images/people1.png" alt=""  class="timg"/>李心广&nbsp教授</a></li>
                </ul>
                </div>
            </dl>
            <dl id="contact" class=" title_color ">
                <dt><p><span>联系我们</span><a href="#" class="more">more</a></p></dt>
                <ul>
                    
                        <li><span>[电话]：</span>0086 -020 -36207116</li>
                        <li><span>[地址]：</span>广东省广州市白云区白云大道北2号—广东外语外贸大学<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp西方语言文化学院</li>
                        <li><span>[邮编]：</span>510420</li>
                        <li><span>[新浪微博]：</span>
                            <a href="http://e.weibo.com/gwxiyu?ref=http%3A%2F%2Fs.weibo.com%2Fweibo%2F%2525E5%2525B9%2525BF%2525E5%2525A4%252596%2525E8%2525A5%2525BF%2525E8%2525AF%2525AD%2525E5%252592%25258C%2525E9%2525A3%25258E%3Ftopnav%3D1%26wvr%3D5%26b%3D1" target="_blank">
                            @广外西语和风</a>
                        </li>
                <div>
                <a href="#" class="title_color"><img src="<?php bloginfo('template_directory')?>/images/mail.png" alt="" />院长信箱</a><a href="#" class="title_color"><img src="<?php bloginfo('template_directory')?>/images/mail2.png" alt="" />书记信箱</a><a href="#" class="title_color"><img src="<?php bloginfo('template_directory')?>/images/mail3.png" alt="" />投稿系统</a><a href="#" class="title_color"><img src="<?php bloginfo('template_directory')?>/images/note.png" alt="" />留言板</a>
                </div>
                </ul>               
            </dl>
        </div>
    </div>

<?php get_footer(); ?>
