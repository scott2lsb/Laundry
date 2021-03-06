<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Basic DataGrid - jQuery EasyUI Demo</title>
	
	
</head>
<body class="easyui-layout">
	<div data-options="region:'north',border:false" style="height:60px;background:#B3DFDA;padding:10px">north region</div>
	<div data-options="region:'west',split:true,title:'West'" style="width:250px;padding:10px;">
		<div class="easyui-panel" style="padding:5px">
			<ul id="menuTree" class="easyui-tree" data-options="url:'tree_data1.json',method:'get',animate:true,lines:true"></ul>
		</div>
	</div>
	<div data-options="region:'center'">
		<div id="tt" class="easyui-tabs" style="width:100%;height:100%;">
		    <div title="Tab1" style="padding:20px;display:none;">
				tab1
		    </div>
		    <div title="Tab2" data-options="closable:true" style="overflow:auto;padding:20px;display:none;">
				tab2
		    </div>
		    <div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="padding:20px;display:none;">
				tab3
		    </div>
		</div>
	</div>
<script type="text/javascript" >
	$('#menuTree').tree({
	onClick: function(node){
		$('#tt').tabs('add',{title:node.text,href:"__URL__/saveData.html",closable:true,width:100,height:100,});
		alert(node.text);  // alert node text property when clicked
	}
});
</script>
</body>
</html>