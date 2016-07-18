<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery-1.9.1.min.js,../js/jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/transport_jquery.js,common.js,respond.src.js')); ?>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
//-->
</script>

</head>
<body>
<div class="help">
	<div class="help_title">
    	<ul>
        	<li class="first">
            	<a href="index.php?act=main">
					<i class="icon-home"></i>
				</a>
            </li>
            <li>\</li>
            <li><?php echo $this->_var['ur_here']; ?></li>
            <li class="screen-meta-links">
            	<a class="h-btn" href="javascript:;">
					帮助
					<i class="icon-up"></i>
				</a>
            </li>
        </ul>
    </div>
    <div class="help_body">
    	<div class="contextual-help-wrap">
        	<div>
            	<div class="contextual-help-tabs">
                	<ul>
                    	<li class="active">
                        	<a href="javascript:void(0);"> 概述 </a>
                        </li>
                    </ul>
                </div>
                <div class="contextual-help-tabs-wrap">
                	<div class="tab-content">
                    	<div class="help-tab-content active tab-pane">
                        	<p>欢迎访问ecshop<?php echo sub_str($this->_var['ur_here'],2); ?>页面。</p>
                        </div>
                    </div>
                </div>
                <div class="contextual-help-sidebar tab-pane active">
                	<p>
                    	<strong>更多信息:</strong>
                    </p>
                    <p>
                    	<a target="_blank" href="http://help.ecmoban.com/article-1589.html">关于添加<?php echo sub_str($this->_var['ur_here'],2); ?>帮助文档</a> 
                    </p>
                    <p><a target="_blank" href="http://help.ecmoban.com/article-15.html">关于<?php echo $this->_var['ur_here']; ?>帮助文档</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('.screen-meta-links').on('click', function(){
	var 
	$this = $(this),
		$screenmeta = $this.parents('.help').find('.contextual-help-wrap'),
		$i = $this.find('i');
		if($i.attr('class', $i.hasClass('icon-up') ? 'icon-down' : 'icon-up').hasClass('icon-down')){
			$screenmeta.css('display', 'none');
	
		}else{
			$screenmeta.css('display', 'block');
		}
})
</script>

