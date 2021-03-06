<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<div >
    <form id="productForm" name="productForm" action="__APP__/ProductManage/Create" method="post" enctype="multipart/form-data">
    	<div style="width:50%;float:left" >
	    	<table cellpadding="5">
	    		<tr>
	    			<td>产品名称:</td>
	    			<td>
	    				<input class="easyui-textbox" type="text" name="product_name" data-options="required:true"></input>
	   				</td>
	   				<td style="display:none">
	   					<input name="product_id" class="easyui-textbox" type="text" ></input>
	   				</td>
	    		</tr>
	    		<tr>
	    			<td>产品价格:</td>
	    			<td><input class="easyui-textbox" type="text" name="price" data-options="required:true"></input></td>
	    		</tr>
	    		<tr>
	    			<td>产品描述:</td>
	    			<td><textarea style="height:60px;width:145px" name="describe"></textarea></td>
	    		</tr>
	    		<tr>
	    			<td>产品类型:</td>
	    			<td style="display:none">
	   					<input id="img" name="img" class="easyui-textbox" type="text"></input>
	   				</td>
	    			<td>
	    				<input class="easyui-combobox" name="type_id" style="width:100%"
							   data-options="url: '__APP__/ProductManage/getProductTypeList',method: 'get',
								valueField:'type_id',textField:'type_name',groupField:'parent_name'">
					</td>
	    		</tr>
	    	</table>
    	</div>
    	<div style="width:50%;float:right">
    		<div style="text-align:center;margin:15px auto;">
				<div style="text-align:center;margin:15px auto;">
					<img id="img0" src="" alt="产品照片" height="120px" width="160px">
				</div>
			</div>
			<input name="img[]" type="file" id="up0" />
    	</div>
    </form>
    </div>
    <div style="text-align:center;padding:5px">
    	<a class="easyui-linkbutton" onclick="submitForm()">Submit</a>
    	<a class="easyui-linkbutton" onclick="$('#productModify').dialog('close')">Close</a>
    </div>
<script type="text/javascript">
$(function () {
    $("#up0").uploadPreview({ Img: "img0"});
});
function submitForm(){
	if("" != $("#product_id").val())
	 {
		$("#productForm").attr('action', '__APP__/ProductManage/Modify');
	 }
	var form = document.productForm;
	var rsp = iframeCallback(form,submitFormDone);
	form.submit();
	return rsp;
}
function submitFormDone(rsp){
	if(isSuccess(rsp)){
		//关闭当前对话框
		$('#productModify').dialog('close');
		//重新加载datagrid数据
		$("#productGrid").datagrid('reload'); 
	}
	else{
		fuegoAlert(rsp.errorMsg);
	}
}

</script>
</body>
</html>