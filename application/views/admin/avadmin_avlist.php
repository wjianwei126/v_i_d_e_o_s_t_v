	<div class="fanwe-body">
		<div class="fb-title"><div><p><span></span></p></div></div>
		<div class="fb-body">
			<table class="body-table" cellpadding="0" cellspacing="1" border="0">
				<tr>
					<td class="body-table-td">
						<div class="body-table-div">
<div class="handle-btns">
	<div class="img-button "><p><input type="button" id="editShare" name="editShare" value="编辑" onclick="editData(this,'checkList','share_id')" class="editShare"></p></div>
	<div class="img-button "><p><input type="button" id="removeShare" name="removeShare" value="删除" onclick="removeData(this,'checkList')" class="removeShare"></p></div>
</div>
<div class="search-box">
    <form action="/admin/index_share">
		<span>相册ID</span>
		<input class="textinput" type="text" value="" name="ablumid" size="12" />
		<small></small>
		<span>用户ID</span>
		<input class="textinput" type="text" value="" name="userid" id="user_name" size="8" />
		<small></small>
		<span>分享类型</span>
		<select name="type">
			<option value="0"  >全部</option>
			<option value="album_best"  >推荐杂志社</option>
		</select>
		<small></small>
		<span>审核</span>
		<select name="status">
			<option value="0"  >全部</option>
			<option value="1" selected="selected" >未审核</option>
			<option value="2"  >已审核</option>
		</select>
		<input class="submit_btn" type="submit" value="搜索" />
		
	</form>
</div>
<!-- Think 系统列表组件开始 -->
<table id="checkList" class="table-list list" cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
<th width="30" class="first"><input type="checkbox" onclick="checkAll('checkList')"></th>
<th ><a href="javascript:sortBy('share_id','','index')" title="按照编号 ">编号</a></th>
<th ><a href="javascript:sortBy('content','','index')" title="名称 ">名称</a></th>
<th width="100" ><a href="javascript:sortBy('cate_name','','index')" title="分类 ">分类</a></th>
<th ><a href="javascript:sortBy('content','','index')" title="封面 ">封面</a></th>
<th width="100" ><a href="javascript:sortBy('create_time','','index')" title="按照发布时间 ">发布时间</a></th>
<th width="60" ><a href="javascript:sortBy('status','','index')" title="按照审核 ">审核</a></th>
<th width="240">操作</th></tr>
</thead>
<tbody>
<?php foreach($lists as $row){?>
<tr>
<td><input type="checkbox" name="vid[]" value="<?php echo $row['vid'];?>" /></td><td><a href="/<?php echo $_c;?>/avdetail/<?php echo $row['vid'];?>"><?php echo $row['avkey'];?></a></td><td><?php echo $row['title'];?></td><td><?php echo $row['cid'];?></td><td><?php echo $row['cover'];?></td><td><?php echo $row['atime'];?></td><td><?php echo $row['flag'];?></td>

</tr>
<?php }?>
</tbody>
</table>
<!-- Think 系统列表组件结束 -->

<div class="pager"><?php echo $page_string;?></div>
</div>
</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ajax-loading"></div>
