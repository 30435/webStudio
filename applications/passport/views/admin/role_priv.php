<?php $this->load->view('header_admin') ?>
<link href="<?php echo $this->staticUrl; ?>admin/css/jquery.treeTable.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->staticUrl; ?>common/script/jquery.treetable.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#dnd-example").treeTable({
    	indent: 30
    	});
  });
  function checknode(obj)
  {
      var chk = $("input[type='checkbox']");
      var count = chk.length;
      var num = chk.index(obj);
      var level_top = level_bottom =  chk.eq(num).attr('level')
      for (var i=num; i>=0; i--)
      {
              var le = chk.eq(i).attr('level');
              if(eval(le) < eval(level_top)) 
              {
                  chk.eq(i).attr("checked",true);
                  var level_top = level_top-1;
              }
      }
      for (var j=num+1; j<count; j++)
      {
              var le = chk.eq(j).attr('level');
              if(chk.eq(num).attr("checked")=="checked") {
                  if(eval(le) > eval(level_bottom)) chk.eq(j).attr("checked",true);
                  else if(eval(le) == eval(level_bottom)) break;
              }
              else {
                  if(eval(le) > eval(level_bottom)) chk.eq(j).attr("checked",false);
                  else if(eval(le) == eval(level_bottom)) break;
              }
      }
  }

  function operationAll(type)
  {
	  var attrValue = type == 'yes' ? true : false;
	  $('input[name="menuids[]"]').attr('checked', attrValue);
  }
</script>

<div class="pad_10">
  <div class="table-list" id="load_priv">
    <table width="100%" cellspacing="0">
	  <thead>
	  <tr>
	  <th class="text-l cu-span" style='padding-left:30px;'><span onClick="operationAll('yes');"><?php echo 'selected_all';?></span>/<span onClick="operationAll('no');"><?php echo 'cancel';?></span></th>
	  </tr>
	  </thead>
    </table>
	<?php
		//echo validation_errors();
		$attributes = array('name' => 'myform', 'id' => 'myform');
		echo form_open($this->appMenus[$this->method]['url'], $attributes);
	?>
    <input type="hidden" name="id" value="<?php echo $this->roleId?>"></input>
    <table width="100%" cellspacing="0" id="dnd-example">
      <thead>
        <tr>
		  <th>操作名称</th>
		  <th>所属应用</th>
		  <th>操作位置</th>
        </tr>
      </thead>
      <tbody>
      <?php echo $this->menusStr; ?>
      </tbody>
    </table>
    <div class="btn"><input type="submit"  class="button" name="dosubmit" id="dosubmit" value="<?php echo 'submit';?>" /></div>
    </form>
  </div>
</div>
</body>
</html>