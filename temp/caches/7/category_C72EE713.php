<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:53:"/Users/alibaba/Sites/themes/ecmoban_zsxn/category.dwt";i:1;s:64:"/Users/alibaba/Sites/themes/ecmoban_zsxn/library/page_header.lbi";i:2;s:60:"/Users/alibaba/Sites/themes/ecmoban_zsxn/library/ur_here.lbi";i:3;s:66:"/Users/alibaba/Sites/themes/ecmoban_zsxn/library/category_tree.lbi";i:4;s:60:"/Users/alibaba/Sites/themes/ecmoban_zsxn/library/history.lbi";i:5;s:63:"/Users/alibaba/Sites/themes/ecmoban_zsxn/library/goods_list.lbi";i:6;s:58:"/Users/alibaba/Sites/themes/ecmoban_zsxn/library/pages.lbi";i:7;s:64:"/Users/alibaba/Sites/themes/ecmoban_zsxn/library/page_footer.lbi";}s:7:"expires";i:1468336217;s:8:"maketime";i:1468332617;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>裤子_钻石_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_zsxn/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/global.js"></script><script type="text/javascript" src="js/compare.js"></script></head>
<body>
 
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script> 
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script> 
<div class="indexw_header">
  <div class="top_nav"> 
    <script type="text/javascript">
          //初始化主菜单
            function sw_nav(obj,tag)
            {
     
            var DisSub = document.getElementById("DisSub_"+obj);
            var HandleLI= document.getElementById("HandleLI_"+obj);
                if(tag==1)
                {
                    DisSub.style.display = "block";
             
                    
                }
                else
                {
                    DisSub.style.display = "none";
                
                }
     
            }
     
    </script>
    <div class="block"> 
      
      <ul class="top_bav_l">
        <li class="top_sc"> <a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a> </li>
        <li>关注我们：</li>
        <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);"> <a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a>
          <div id=DisSub_1 class="top_nav_box  top_weibo"> <a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a> <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> </div>
        </li>
        <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);"> <a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a>
          <div id="DisSub_2" class="weixinBox" style="display: none;"> <img src="themes/ecmoban_zsxn/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" width="150" height="190"> </div>
        </li>
      </ul>
      
      <div class="header_r"> <script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script> <font id="ECS_MEMBERZONE" >45ea207d7a2b68c49582d2d22adf953amember_info|a:1:{s:4:"name";s:11:"member_info";}45ea207d7a2b68c49582d2d22adf953a </font> 
        
         
         
        <a href="user.php" >我的账户</a> 
         
        | 
         
         
        <a href="pick_out.php" >选购中心</a> 
         
        | 
         
         
        <a href="tag_cloud.php" >标签云</a> 
         
        | 
         
         
        <a href="quotation.php" >报价单</a> 
         
         
         
        
      </div>
    </div>
  </div>
  <div class=" block header_bg" style="margin-bottom: 0px;">
    <div class="clear_f"></div>
    <div class="header_top logo_wrap">
      <div class="indexw_header_middleL"> <a class="logo_new" href="index.php"><img src="themes/ecmoban_zsxn/images/logo.gif"  width="139" height="41"/></a> </div>
      <div class="indexw_slogan"></div>
      <div class="indexw_header_middleR">
        <div class="indexw_header_input_border">
          <div class="ser_n">
            <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
              <input name="keywords" type="text" id="keyword" value="戒托"  onclick="javascript:if(this.value=='戒托')this.value=''"  class="indexw_header_input_text" />
              <input type="submit"  name="imageField" class="fm_hd_btm_shbx_bttn" value="搜 索">
            </form>
            <ul class="searchType none_f">
            </ul>
          </div>
          <a href="flow.php" class="a_head_order"></a> </div>
      </div>
    </div>
  </div>
</div>
<div class="menu_box clearfix">
  <div class="block">
    <div class="menu"> <a href="index.php">首页<span></span></a> 
       
      <a href="category.php?id=21"  > 女装 <span></span> </a> 
      
       
      <a href="category.php?id=132"  > 钻石 <span></span> </a> 
      
       
      <a href="category.php?id=170"   class="cur"> 裤子 <span></span> </a> 
      
       
      <a href="brand.php"  > 品牌专区 <span></span> </a> 
      
       
      <a href="group_buy.php"  > 团购 <span></span> </a> 
      
       
    </div>
  </div>
</div>
  <div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=132">钻石</a> <code>&gt;</code> <a href="category.php?id=170">裤子</a> 
</div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
<div id="category_tree">
<div class="tit">所有商品分类</div>
<dl class="clearfix" style=" overflow:hidden;" >
<div class="box1 cate" id="cate"> 
   
  <h1 onclick="tab(0)"   style="border-top:none"   > 
  <span class="f_l"><img src="themes/ecmoban_zsxn/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   style="border-top:none"  href="category.php?id=138" class="  f_ll" >针织衫</a>
  <ul style="display:none" >
     
    <a class="over_2" href="category.php?id=139">针织背心</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=140">套头衫</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=141">开衫</a>
    <div class="clearfix"> 
       
    </div>
      </ul>
  <div style="clear:both"></div>
   
  <h1 onclick="tab(1)"    > 
  <span class="f_l"><img src="themes/ecmoban_zsxn/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=154" class="  f_ll" >内衣</a>
  <ul style="display:none" >
     
    <a class="over_2" href="category.php?id=156">内衣/套装</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=157">袜子</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=158">家居服</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=159">内裤</a>
    <div class="clearfix"> 
       
    </div>
      </ul>
  <div style="clear:both"></div>
   
  <h1 onclick="tab(2)"    > 
  <span class="f_l"><img src="themes/ecmoban_zsxn/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=160" class="  f_ll" >外套</a>
  <ul style="display:none" >
     
    <a class="over_2" href="category.php?id=161">皮衣/皮草</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=162">卫衣</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=163">风衣</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=164">大衣</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=166">西服</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=167">棉服</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=168">羽绒服</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=169">夹克</a>
    <div class="clearfix"> 
       
    </div>
      </ul>
  <div style="clear:both"></div>
   
  <h1 onclick="tab(3)"    > 
  <span class="f_l"><img src="themes/ecmoban_zsxn/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=170" class="  f_ll" >裤子</a>
  <ul style="display:none" >
     
    <a class="over_2" href="category.php?id=171">西裤</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=172">牛仔中裤</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=173">休闲裤</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=174">牛仔裤</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=623">休闲短裤</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=629">休闲分裤</a>
    <div class="clearfix"> 
       
    </div>
      </ul>
  <div style="clear:both"></div>
   
  <h1 onclick="tab(4)"    > 
  <span class="f_l"><img src="themes/ecmoban_zsxn/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=175" class="  f_ll" >T恤</a>
  <ul style="display:none" >
     
    <a class="over_2" href="category.php?id=176">长袖T恤</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=178">短袖T恤</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=179">背心</a>
    <div class="clearfix"> 
       
    </div>
      </ul>
  <div style="clear:both"></div>
   
  <h1 onclick="tab(5)"    > 
  <span class="f_l"><img src="themes/ecmoban_zsxn/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=182" class="  f_ll" >POLO衫</a>
  <ul style="display:none" >
     
    <a class="over_2" href="category.php?id=185">长袖POLO衫</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=188">短袖POLO衫</a>
    <div class="clearfix"> 
       
    </div>
      </ul>
  <div style="clear:both"></div>
   
  <h1 onclick="tab(6)"    > 
  <span class="f_l"><img src="themes/ecmoban_zsxn/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
  </h1>
  <a   href="category.php?id=190" class="  f_ll" >衬衫</a>
  <ul style="display:none" >
     
    <a class="over_2" href="category.php?id=193">短袖衬衫</a>
    <div class="clearfix"> 
       
    </div>
     
    <a class="over_2" href="category.php?id=194">长袖衬衫</a>
    <div class="clearfix"> 
       
    </div>
      </ul>
  <div style="clear:both"></div>
   
</div>
<div style="clear:both"></div>
</div>
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/ecmoban_zsxn/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/ecmoban_zsxn/images/btn_unfold.gif"
		}
}
</script><div class="box" id='history_div'> <div class="box_1">
 <h3><span>浏览历史</span></h3>
 
  <div class="boxCenterList clearfix" id='history_list'>
    45ea207d7a2b68c49582d2d22adf953ahistory|a:1:{s:4:"name";s:7:"history";}45ea207d7a2b68c49582d2d22adf953a  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>
    
  </div>
  
  
  <div class="AreaR">
	 
	  	 
   
<div class="box">
 <div class="box_1">
  <ul class="goods_list">
  <span>商品列表</span>
  <form method="GET" class="sort" name="listform">
    <li> 显示方式：</li>
    <li> <a href="javascript:;" onClick="javascript:display_mode('list')">
    <img style="top:5px;" src="themes/ecmoban_zsxn/images/display_mode_list.gif" alt="" ></a>
    </li>
    <li> <a href="javascript:;" onClick="javascript:display_mode('grid')">
    <img style="top:5px;" src="themes/ecmoban_zsxn/images/display_mode_grid_act.gif" alt=""></a>
    </li>
    <li>  <a href="javascript:;" onClick="javascript:display_mode('text')">
    <img style="top:5px;" src="themes/ecmoban_zsxn/images/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;
    </li>
  
    <li>  <a href="category.php?category=170&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list">
    <img src="themes/ecmoban_zsxn/images/goods_id_DESC.gif" alt="按上架时间排序"></a>
    </li>
    <li>  <a href="category.php?category=170&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">
    <img src="themes/ecmoban_zsxn/images/shop_price_default.gif" alt="按价格排序"></a>
    </li>
    <li>  <a href="category.php?category=170&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=last_update&order=DESC#goods_list">
    <img src="themes/ecmoban_zsxn/images/last_update_default.gif" alt="按更新时间排序"></a>
    </li>
  <input type="hidden" name="category" value="170" />
  <input type="hidden" name="display" value="grid" id="display" />
  <input type="hidden" name="brand" value="0" />
  <input type="hidden" name="price_min" value="0" />
  <input type="hidden" name="price_max" value="0" />
  <input type="hidden" name="filter_attr" value="0" />
  <input type="hidden" name="page" value="1" />
  <input type="hidden" name="sort" value="goods_id" />
  <input type="hidden" name="order" value="DESC" />
  </form>
  </ul>
      <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
            <div class="clearfix goodsBox" style="border:none;">
        </div>
        </form>
  
 </div>
</div>
<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
var button_compare = '';
var exist = "您已经选择了%s";
var count_limit = "最多只能选择4个商品进行对比";
var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
var btn_buy = "购买";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
</script>
<form name="selectPageForm" action="/category.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l " style="margin-right:10px;">总计 <b>0</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>  
  
</div>
<div class="blank"></div>
<div class="indexw_footer_banner">
  <ul>
    <li><a class="indexw_footer_banner_1" href="#" target="_blank"></a></li>
    <li><a class="indexw_footer_banner_2" href="#" target="_blank"></a></li>
    <li><a class="indexw_footer_banner_3" href="#" target="_blank"></a></li>
    <li><a class="indexw_footer_banner_4" href="#" target="_blank"></a></li>
    <li><a class="indexw_footer_banner_5" href="#" target="_blank"></a></li>
    <li><a class="indexw_footer_banner_6" href="#" target="_blank"></a></li>
  </ul>
</div>
<div class="indexw_foot_service">
  <div class="indexw_foot_service_border"> <a class="indexw_foot_service_left" href="./index.php"></a>
    <div class="indexw_foot_service_middle"> 
       
       
            <ul>
        <li><span>新手上路 </span></li>
        
                <li><a target="_blank" href="article.php?id=9" title="售后流程" >售后流程</a></li>
                <li><a target="_blank" href="article.php?id=10" title="购物流程" >购物流程</a></li>
                <li><a target="_blank" href="article.php?id=11" title="订购方式" >订购方式</a></li>
                
      </ul>
       
       
            <ul>
        <li><span>手机常识 </span></li>
        
                <li><a target="_blank" href="article.php?id=12" title="如何分辨原装电池" >如何分辨原装电池</a></li>
                <li><a target="_blank" href="article.php?id=14" title="如何享受全国联保" >如何享受全国联保</a></li>
                
      </ul>
       
       
            <ul>
        <li><span>配送与支付 </span></li>
        
                <li><a target="_blank" href="article.php?id=15" title="货到付款区域" >货到付款区域</a></li>
                <li><a target="_blank" href="article.php?id=16" title="配送支付智能查询 " >配送支付智能查询</a></li>
                <li><a target="_blank" href="article.php?id=17" title="支付方式说明" >支付方式说明</a></li>
                
      </ul>
       
       
            <ul>
        <li><span>会员中心</span></li>
        
                <li><a target="_blank" href="article.php?id=18" title="资金管理" >资金管理</a></li>
                <li><a target="_blank" href="article.php?id=19" title="我的收藏" >我的收藏</a></li>
                <li><a target="_blank" href="article.php?id=20" title="我的订单" >我的订单</a></li>
                
      </ul>
       
       
            <ul>
        <li><span>服务保证 </span></li>
        
                <li><a target="_blank" href="article.php?id=21" title="退换货原则" >退换货原则</a></li>
                <li><a target="_blank" href="article.php?id=22" title="售后服务保证 " >售后服务保证</a></li>
                <li><a target="_blank" href="article.php?id=23" title="产品质量保证 " >产品质量保证</a></li>
                
      </ul>
       
       
       
       
       
    </div>
    <div class="indexw_foot_service_right"> <a class="xlwb" target="_blank" href="#" style="width:188px;right:0px;"></a> </div>
  </div>
</div>
<dl class="indexw_foot_other">
  <dt>
    <p class="ft_consult"><a href="#"></a></p>
     
     
    
    <div> </div>
  </dt>
  
  
  <dd class="indexw_friend_link">
    <ul id="link_slide">
      <li> 
         
         
        <a href="article.php?id=1"  > 免责条款</a> <span>|</span> 
         
        <a href="article.php?id=2"  > 隐私保护</a> <span>|</span> 
         
        <a href="article.php?id=3"  > 咨询热点</a> <span>|</span> 
         
        <a href="article.php?id=4"  > 联系我们</a> <span>|</span> 
         
        <a href="article.php?id=5"  > 公司简介</a> <span>|</span> 
         
        <a href="wholesale.php"  > 批发方案</a> <span>|</span> 
         
        <a href="myship.php"  > 配送方式</a>  
         
         
      </li>
    </ul>
    <div class="resetClear"></div>
  </dd>
  
  <dd class="copyright"></dd>
  <dd class="img">
   <a rel="nofollow" href="javascript:;" onclick="javascript:window.open('#')"> 
   <img src="themes/ecmoban_zsxn/images/fot_certi.gif" height="35" width="110"></a>
    <a rel="nofollow" href="#"> 
    <img src="themes/ecmoban_zsxn/images/fot_certi_02.jpg" height="35" width="116"></a> 
    <a rel="nofollow" href="javascript:;" onclick="#"> 
    <img src="themes/ecmoban_zsxn/images/fot_certi_03.jpg" height="35" width="115"></a> 
    <a rel="nofollow" href="#" target="_blank">
    <img src="themes/ecmoban_zsxn/images/fot_certi_04.jpg" border="0"></a> 
    <a href="#" style="display:inline-block;*display:inline;zoom:1;position:relative;text-decoration:none;">
    <img src="themes/ecmoban_zsxn/images/picp_bg.png" alt="沪公网备" height="35" border="0" width="115"> </a> 
    
    <div id="footer" style="width:1px; height:1px; overflow:hidden;">
      <div class="text"> &copy; 2005-2016 ECSHOP 版权所有，并保留所有权利。<br />
          
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        <br />
         
        45ea207d7a2b68c49582d2d22adf953aquery_info|a:1:{s:4:"name";s:10:"query_info";}45ea207d7a2b68c49582d2d22adf953a<br />
        <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v3.0.0</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2F127.0.0.1%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
                <div align="left"  id="rss"><a href="feed.php?cat=170"><img src="themes/ecmoban_zsxn/images/xml_rss2.gif" alt="rss" /></a></div>
      </div>
    </div>
    <div class="record"> &copy; 2005-2016 ECSHOP 版权所有，并保留所有权利。  
    </div>
    <br />
    <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_zsxn/images/ecmoban.gif" alt="ECShop模板" /></a></div>
  </dd>
</dl>
<div class="QQbox" id="divQQbox" style="width: 170px; ">
  <div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>
      9:00-18:00</div>
    <div class="con">
      <ul>
        
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        
              </ul>
    </div>
    <div class="b"></div>
  </div>
  <div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="themes/ecmoban_zsxn/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script> 
</body>
</html>
