<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于我们</title>
<link href="index.css" type="text/css" rel="stylesheet" />

</head>

<body>
<?php
include("header file.php");
?>
<div id="page">
     <div id="top">
     <div class="center">
    	 <div id="logo_word">
          		<div id="logo"><a href="//www.ecjtu.net"><img src="img/logo.png"/></a></div>
          		 <div id="word"><img alt="致力于交大学子的生活" src="img/wenzi.png"/></div>
     		</div>
           <div id="nav">
              <nav>
                   <ul id="nav_ul">
                      <li><a class="nav_a dif" href="javascript:;">关于我们</a></li>
                      <li><a class="nav_a" href="javascript:;">日新大事</a></li>
                      <li><a class="nav_a" href="javascript:;">管理团队</a></li>
                      <li><a class="nav_a" href="javascript:;">广告服务</a></li>
                      <li><a class="nav_a" href="http://hr.ecjtu.net/">人才招聘</a></li>
                   </ul>
              </nav>
          </div>
      </div>
     </div>
     <div id="mid">
        <div id="main">
            <div id="scr">
                 <div id="main_1">
                     <div id="content_1">
                     <div id="img">
                        <img src="img/about-banner.png" alt="关于我们" />
                     </div>
                     <div >
                         <div id="us">
                             <span id="squ"></span><span>关于我们</span>
                         </div>    
                         <p>华东交通大学思想政治教育网站——日新网（www.ecjtu.net）建立于2001年6月，日新网在华东交通大学党委关心支持下，在学生工作处团委的直接领导下，始终高举邓小平理论伟大旗帜，贯彻"三个代表"重要思想，落实科学发展观，坚持正确的办网宗旨，坚持正确的舆论导向，紧扣学校的发展主线，坚持为广大师生服务。</p>
                         <div id="twoImg">
                             <div class="intro"><a href="http://hr.ecjtu.net/index.php/hr/intro_newcomer">中心简介</a></div>
                             <div class="intro"><a href="http://hr.ecjtu.net/index.php/hr/intro_product">产品简介</a></div>
                         </div>
                     </div>
                 </div>
                 </div>
                 <div id="main_2">
                      <div class="side">
                          <ul class="side_ul">
                              <!-- <li><a href="javascript:;" class="side_a bright">2013-2014</a></li> -->
                              <li><a href="javascript:;" class="side_a bright">2009-2012</a></li>
                              <li><a href="javascript:;" class="side_a">2006-2008</a></li>
                              <li><a href="javascript:;" class="side_a">2003-2005</a></li>
                              <li><a href="javascript:;" class="side_a">2001-2002</a></li>
                          </ul>
                      </div>     
                 <div class="content">
                 		 <!-- <div class="even show">
                 		  	  <div class="year">
                 		  	  	  <ul>
                 		  	  	  	  <li></li>
                 		  	  	  	  <li></li>
                 		  	  	  	  <li></li>
                 		  	  	  	  <li></li>
                 		  	  	  	  <li></li>
                 		  	  	  	  <li></li>
                 		  	  	  </ul>
                 		  	  </div>
                 		  	  <div class="thing">
                 		  	  	   <ul>
                 		  	  	   		<li></li>
                 		  	  	   		<li></li>
                 		  	  	   		<li></li>
                 		  	  	   		<li></li>
                 		  	  	   		<li></li>
                 		  	  	   </ul>
                 		  	  </div>
                 		  </div> -->
                          <div class="even show"> <!-- 2009-2012 -->
                              <?php 
                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2009%' limit 0,6";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2010%' limit 0,6";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                              <div class="clear"></div>
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2011%' limit 0,5";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                              <div class="clear"></div>
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2012%' limit 0,5";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                          </div>
                          <div class="even"><!-- 2006-2008 -->
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2006%' limit 0,3";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2007%' limit 0,3";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2008%' limit 0,5";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>  
                          </div>
                          <div class="even"> <!-- 2003-2005 -->
                              <?php 
                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2003%' limit 0,3";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                                    <div class="year">
                                        <ul>
                                            <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                        </ul>   
                                    </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2004%' limit 0,3";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                              <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2005%' limit 0,3";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                                      ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                              <?php }?>
                          </div>
                          <div class="even"> <!-- 2001-2002 -->
                          
                            <?php 
                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2001%' limit 0,5";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                            ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                                  <?php }?>
                             <?php 

                                  $sql = "SELECT * FROM  `rxevents` WHERE DATE LIKE  '%2002%' limit 0,5";
                                  $query = mysql_query($sql);
                                  while ($rs = mysql_fetch_array($query)) {
                              ?>
                              <div class="year">
                                     <ul>
                                         <li><?php echo str_replace("[","", str_replace("]", "",$rs['date'] ));?></li>
                                     </ul>   
                                  </div>
                              <div class="thing">
                                      <ul>
                                          <li><?php echo $rs['content'];?></li>
                                      </ul>
                                  </div>
                                  <?php }?>
                          </div>
                      </div>
                 </div>
                 <div id="main_3">
                          <div class="side">
                              <ul>
                                  <li><a class="grp_a bright">2001-2002</a></li>
                                  <li><a class="grp_a">2002-2003</a></li>
                                  <li><a class="grp_a">2003-2004</a></li>
                                  <li><a class="grp_a">2004-2005</a></li>
                                  <li><a class="grp_a">2005-2006</a></li>
                                  <li><a class="grp_a">2006-2007</a></li>
                                  <li><a class="grp_a">2007-2008</a></li>
                              </ul>
                          </div>
        
                 <div class="content"> <!-- 管理团队 -->
                          <div class="group show">
                              <div>
                                 <ul>
                                  <?php
                                      $sql = "SELECT * FROM `office` ORDER BY `id`  ASC limit 0,15";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>
                                          <li>
                                              <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                              <span class="name"><?php echo $rs['name']; ?></span>
                                              <span class="grade"><?php echo $rs['nianji']; ?></span>
                                          </li>
                                      <?php } ?>
                                      </ul>
                              </div>
                          </div>
                          <div class="group">
                              <div>
                                  <ul>
                                  <?php
                                      $sql = "SELECT * FROM `office` ORDER BY `id`  ASC limit 16,30";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>
                                          <li>
                                              <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                              <span class="name"><?php echo $rs['name']; ?></span>
                                              <span class="grade"><?php echo $rs['nianji']; ?></span>
                                          </li>
                                      <?php } ?>
                                      </ul>
                              </div>
                          </div>
                          <div class="group">
                              <div>
                                  <ul>                                  
                                  <?php
                                       $sql = "SELECT * FROM `office` ORDER BY `id` ASC limit 31,45";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>
                                      <li>
                                          <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                          <span class="name"><?php echo $rs['name']; ?></span>
                                          <span class="grade"><?php echo $rs['nianji']; ?></span>
                                      </li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                          <div class="group">
                              <div>
                                  <ul>
                                  <?php
 									  $sql = "SELECT * FROM `office` ORDER BY `id` ASC limit 46,60";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>
                                      <li>
                                          <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                          <span class="name"><?php echo $rs['name']; ?></span>
                                          <span class="grade"><?php echo $rs['nianji']; ?></span>
                                      </li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                          <div class="group">
                              <div>
                                 <ul>
                                  <?php
									  $sql = "SELECT * FROM `office` ORDER BY `id` ASC limit 61,75";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>
                                      <li>
                                          <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                          <span class="name"><?php echo $rs['name']; ?></span>
                                          <span class="grade"><?php echo $rs['nianji']; ?></span>
                                      </li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                          <div class="group">
                              <div>
                                  <ul>
                                  <?php
									  $sql = "SELECT * FROM `office` ORDER BY `id` ASC limit 76,90";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>
                                      <li>
                                          <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                          <span class="name"><?php echo $rs['name']; ?></span>
                                          <span class="grade"><?php echo $rs['nianji']; ?></span>
                                      </li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                          <div class="group">
                              <div>
                                  <ul>
                                  <?php
									  $sql = "SELECT * FROM `office` ORDER BY `id` ASC limit 91,105";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>

                                      <li>
                                          <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                          <span class="name"><?php echo $rs['name']; ?></span>
                                          <span class="grade"><?php echo $rs['nianji']; ?></span>
                                      </li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                          <div class="group">
                              <div>
                              	  <ul>
                                  <?php
									  $sql = "SELECT * FROM `office` ORDER BY `id` ASC limit 106,120";
                                      $query = mysql_query($sql);
                                      while ($rs = mysql_fetch_array($query)) {
                                  ?>
                                      <li>
                                          <span class="post"><?php echo $rs['zhiwei']; ?></span>
                                          <span class="name"><?php echo $rs['name']; ?></span>
                                          <span class="grade"><?php echo $rs['nianji']; ?></span>
                                      </li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                      </div>
                 </div>
                 <div id="main_4">
                      <div class="side">
                         <ul class="side_ul">
                             <li><a href="javascript:;" class="ad_a bright">本站特色</a></li>
                             <li><a href="javascript:;" class="ad_a">广告报价</a></li>
                         </ul>
                     </div>
                     <div class="content">
                          <div id="fea" class="ad show">
                            <div>
                              <h3>1、用户量大</h3>
                              <p>本站访问量很高，每日pageviews超过9000人次，注册会员在短期内已超过两万人，而且仍在不断增长，是我校规模最大的综合性网站。由于我站面向交大学生，给大家提供了畅所欲言的场所，正因如此，用户定位非常集中。</p>
                            </div>
                            <div>
                              <h3>2、用户群稳定</h3>
                              <p>本站用户为长期积累而成，并非炒作而形成的流动用户。因此用户群非常稳定，相信以后用户群会日益增加，并且稳步增长！</p>
                            </div>
                            <div>
                              <h3>3、服务周到</h3>
                              <p>如果您希望在我们网站打出您自己的广告，我们将会帮您制作相应的banner或者页面，而您只需要按照下面的标准给予我们相应的赞助就足够了。这是每天24小时都会在线的广告！相信您微薄的投入可以获得不菲的收益。</p>
                            </div>
                            <div>
                              <h3>4、更新及时</h3>
                              <p>日新网，贵在一个新字，网站每周都有及时的更新，每天都有专人负责网站事务，以便作好更新工作。</p>
                            </div>
                          </div>
                          <div id="adMny" class="ad">
                              <table id="idTbl">
                                  <tr>
                                      <th>位置</th>
                                      <th id="px">规格（像素）</th>
                                      <th id="typ">类型</th>
                                      <th id="big">大小</th>
                                      <th id="much">价格</th>
                                  </tr>
                                  <tr id="fir">
                                      <td>首页</td>
                                      <td class="two">558*101</td>
                                      <td>gif或者jpg</td>
                                      <td>小于20k</td>
                                      <td>500/月</td>
                                  </tr>
                                  <tr>
                                      <td class="sco">论坛首页</td>
                                      <td class="sco two">468*60</td>
                                      <td class="sco">gif或者jpg</td>
                                      <td class="sco">小于20k</td>
                                      <td class="sco">400/月</td>
                                  </tr>
                                  <tr>
                                      <td class="tir">弹出窗口（主页）</td>
                                      <td class="tir two">320*240</td>
                                      <td class="tir">gif或者jpg</td>
                                      <td class="tir">小于10k</td>
                                      <td class="tir">50元/天</td>
                                  </tr>
                                  <tr>
                                      <td class="four">漂浮窗口（主页页中）</td>
                                      <td class="four two">120*90</td>
                                      <td class="four">无</td>
                                      <td class="four">无</td>
                                      <td class="four">25元/天</td>
                                  </tr>
                                  <tr>
                                      <td class="fiv">文字公告</td>
                                      <td class="fiv two" colspan="3">以新闻公告的形式在首页显示文字链接，点击进入详细介绍页面</td>
                                      <td class="fiv">100元/条</td>
                                  </tr>
                                 
                              </table> 
                              <div id="more">
                                  <h3>备注：</h3>
                                  <p>
                                      <span>以上广告的签定时间以一个月为基础；</span>
                                      <span class="more_span">活动图标广告以一天为基础;</span>
                                  </p>
                                  <p>
                                      <span>根据客户需求图像大小可做适当调整；</span>
                                      <span class="more_span">精品栏目的广告价格请参照版块页面页头广告的价格；</span>
                                  </p>
                                  <p>其中链接广告中在最新动态处做的文字链接以一天为基础。</p>
                              </div>
                          </div>
                     </div>
                 </div>
                 <div id="main_5">
                          <div class="side">
                          </div>
                          <div class="content">
                          </div>
                    </div>
             </div>
        </div>
    </div>          
     <div id="bottom">
     <p>
        <a href="javascript:;">关于我们</a> |
        <a href="http://hr.ecjtu.net/">人才招聘</a> |
        <a href="javascript:;">日新导航</a> |
        <a href="javascript:;">广告服务</a> |
        <a href="javascript:;">意见反馈</a> |
        <a href="javascript:;">不良信息反馈</a>
     </p>
     <p>华东交通大学团委、学工处 [ 版权所有 交大日新 ] 赣ICP备05003322号 日新工作室 维护</p>
     <p>CopyRight 2001-2011 By [ecjtu.net] .All Rights Reserved</p>
     </div>

</div>
<script type="text/javascript" src="browser.js"></script>
<script type="text/javascript" src="index.js"></script>
</body>
</html>
