<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��������</title>
<script type="text/javascript" src="browser.js"></script>
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
          		 <div id="word"><img alt="�����ڽ���ѧ�ӵ�����" src="img/wenzi.png"/></div>
     		</div>
           <div id="nav">
              <nav>
                   <ul id="nav_ul">
                      <li><a class="nav_a dif" href="javascript:;">��������</a></li>
                      <li><a class="nav_a" href="javascript:;">���´���</a></li>
                      <li><a class="nav_a" href="javascript:;">�����Ŷ�</a></li>
                      <li><a class="nav_a" href="javascript:;">������</a></li>
                      <li><a class="nav_a" href="http://hr.ecjtu.net/">�˲���Ƹ</a></li>
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
                        <img src="img/about-banner.png" alt="��������" />
                     </div>
                     <div >
                         <div id="us">
                             <span id="squ"></span><span>��������</span>
                         </div>
                         <p>������ͨ��ѧ˼�����ν�����վ�D�D��������www.ecjtu.net��������2001��6�£��������ڻ�����ͨ��ѧ��ί����֧���£���ѧ����������ί��ֱ���쵼�£�ʼ�ո߾ٵ�Сƽ����ΰ�����ģ��᳹"��������"��Ҫ˼�룬��ʵ��ѧ��չ�ۣ������ȷ�İ�����ּ�������ȷ�����۵��򣬽���ѧУ�ķ�չ���ߣ����Ϊ���ʦ������</p>
                         <div id="twoImg">
                             <div class="intro"><a href="http://hr.ecjtu.net/index.php/hr/intro_newcomer">���ļ��</a></div>
                             <div class="intro"><a href="http://hr.ecjtu.net/index.php/hr/intro_product">��Ʒ���</a></div>
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
                                  <li><a class="grp_a bright">��һ��</a></li>
                                  <li><a class="grp_a">�ڶ���</a></li>
                                  <li><a class="grp_a">������</a></li>
                                  <li><a class="grp_a">���Ľ�</a></li>
                                  <li><a class="grp_a">�����</a></li>
                                  <li><a class="grp_a">������</a></li>
                                  <li><a class="grp_a">���߽�</a></li>
                                  <li><a class="grp_a">�ڰ˽�</a></li>
                                  <li><a class="grp_a">�ھŽ�</a></li>
                                  <li><a class="grp_a">��ʮ��</a></li>
                                  <li><a class="grp_a">��ʮһ��</a></li>
                                  <li><a class="grp_a">��ʮ����</a></li>
                                  <li><a class="grp_a">��ʮ����</a></li>
                              </ul>
                          </div>

                 <div class="content"> <!-- �����Ŷ� -->
                          <div class="group show">
                              <div>
                                 <ul>
                                  <?php
                                      $sql = "SELECT * FROM `office` WHERE `jieshu` = 1 ORDER BY `id`  ASC";
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
                                      $sql = "SELECT * FROM `office` WHERE `jieshu` = 2 ORDER BY `id`  ASC";
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
                                      $sql = "SELECT * FROM `office` WHERE `jieshu` = 3 ORDER BY `id` ASC";
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
 			 	      $sql = "SELECT * FROM `office` WHERE `jieshu` = 4 ORDER BY `id` ASC";
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
				      $sql = "SELECT * FROM `office` WHERE `jieshu` = 5 ORDER BY `id` ASC";
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
				      $sql = "SELECT * FROM `office` WHERE `jieshu` = 6 ORDER BY `id` ASC";
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
				      $sql = "SELECT * FROM `office` WHERE `jieshu` = 7 ORDER BY `id` ASC LIMIT 0,23";
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
				  <ul>
                                  <?php
                                      $sql = "SELECT * FROM `office` WHERE `jieshu` = 7 ORDER BY `id` ASC LIMIT 23,23";
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
				      $sql = "SELECT * FROM `office` WHERE `jieshu` = 8 ORDER BY `id` ASC LIMIT 0,23";
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
				  <ul>
                                  <?php
                                      $sql = "SELECT * FROM `office` WHERE `jieshu` = 8 ORDER BY `id` ASC LIMIT 23,23";
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
				      $sql = "SELECT * FROM `office` WHERE `jieshu` = 9 ORDER BY `id` ASC LIMIT 0,23";
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
				  <ul>
                                  <?php
                                      $sql = "SELECT * FROM `office` WHERE `jieshu` = 9 ORDER BY `id` ASC LIMIT 23,23";
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
                             <li><a href="javascript:;" class="ad_a bright">��վ��ɫ</a></li>
                             <li><a href="javascript:;" class="ad_a">��汨��</a></li>
                         </ul>
                     </div>
                     <div class="content">
                          <div id="fea" class="ad show">
                            <div>
                              <h3>1���û�����</h3>
                              <p>��վ�������ܸߣ�ÿ��pageviews����9000�˴Σ�ע���Ա�ڶ������ѳ��������ˣ��������ڲ�������������У��ģ�����ۺ�����վ��������վ���򽻴�ѧ����������ṩ�˳������Եĳ�����������ˣ��û���λ�ǳ����С�</p>
                            </div>
                            <div>
                              <h3>2���û�Ⱥ�ȶ�</h3>
                              <p>��վ�û�Ϊ���ڻ��۶��ɣ����ǳ������γɵ������û�������û�Ⱥ�ǳ��ȶ��������Ժ��û�Ⱥ���������ӣ������Ȳ�������</p>
                            </div>
                            <div>
                              <h3>3�������ܵ�</h3>
                              <p>�����ϣ����������վ������Լ��Ĺ�棬���ǽ������������Ӧ��banner����ҳ�棬����ֻ��Ҫ��������ı�׼����������Ӧ���������㹻�ˡ�����ÿ��24Сʱ�������ߵĹ�棡������΢����Ͷ����Ի�ò��Ƶ����档</p>
                            </div>
                            <div>
                              <h3>4�����¼�ʱ</h3>
                              <p>������������һ�����֣���վÿ�ܶ��м�ʱ�ĸ��£�ÿ�춼��ר�˸�����վ�����Ա����ø��¹�����</p>
                            </div>
                          </div>
                          <div id="adMny" class="ad">
                              <table id="idTbl">
                                  <tr>
                                      <th>λ��</th>
                                      <th id="px">������أ�</th>
                                      <th id="typ">����</th>
                                      <th id="big">��С</th>
                                      <th id="much">�۸�</th>
                                  </tr>
                                  <tr id="fir">
                                      <td>��ҳ</td>
                                      <td class="two">558*101</td>
                                      <td>gif����jpg</td>
                                      <td>С��20k</td>
                                      <td>500/��</td>
                                  </tr>
                                  <tr>
                                      <td class="sco">��̳��ҳ</td>
                                      <td class="sco two">468*60</td>
                                      <td class="sco">gif����jpg</td>
                                      <td class="sco">С��20k</td>
                                      <td class="sco">400/��</td>
                                  </tr>
                                  <tr>
                                      <td class="tir">�������ڣ���ҳ��</td>
                                      <td class="tir two">320*240</td>
                                      <td class="tir">gif����jpg</td>
                                      <td class="tir">С��10k</td>
                                      <td class="tir">50Ԫ/��</td>
                                  </tr>
                                  <tr>
                                      <td class="four">Ư�����ڣ���ҳҳ�У�</td>
                                      <td class="four two">120*90</td>
                                      <td class="four">��</td>
                                      <td class="four">��</td>
                                      <td class="four">25Ԫ/��</td>
                                  </tr>
                                  <tr>
                                      <td class="fiv">���ֹ���</td>
                                      <td class="fiv two" colspan="3">�����Ź������ʽ����ҳ��ʾ�������ӣ����������ϸ����ҳ��</td>
                                      <td class="fiv">100Ԫ/��</td>
                                  </tr>

                              </table>
                              <div id="more">
                                  <h3>��ע��</h3>
                                  <p>
                                      <span>���Ϲ���ǩ��ʱ����һ����Ϊ������</span>
                                      <span class="more_span">�ͼ������һ��Ϊ����;</span>
                                  </p>
                                  <p>
                                      <span>���ݿͻ�����ͼ���С�����ʵ�������</span>
                                      <span class="more_span">��Ʒ��Ŀ�Ĺ��۸�����հ��ҳ��ҳͷ���ļ۸�</span>
                                  </p>
                                  <p>�������ӹ���������¶�̬����������������һ��Ϊ������</p>
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
        <a target="_blank" href="http://www.ecjtu.net/about/index.php">��������</a>
        |
        <a href="http://hr.ecjtu.net/" target="_blank"> ��վ����</a>
        |
        <a href="http://bbs.ecjtu.net/forum-25-1.html" target="_blank">�������</a>
        |
        <a href="http://123.ecjtu.net/" target="_blank">��������</a>
        |
        <a href="mailto:roger@ecjtu.jx.cn" target="_blank">������Ϣ�ٱ�</a>
     </p>
     <p>������ͨ��ѧ��ί��ѧ���� [ ��Ȩ���� �������� ] ��ICP��05003322�� ���¹����� ά��</p>
     <p>CopyRight 2001-2011 By [ecjtu.net] .All Rights Reserved</p>
     </div>

</div>
<script type="text/javascript" src="index.js"></script>
</body>
</html>
