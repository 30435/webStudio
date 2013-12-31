<?php $this->load->view('header_admin') ?>
<div class="table-list pad-lr-10">
    <table width="100%" cellspacing="0">
      <thead>
		<tr>
          <th>时间</th>
          <th>平均在线数（总数/记录数）</th>
		  <th>在线数前十</th>
		</tr>
      </thead>
      <tbody>
	  <?php 
	  if (is_array($this->extInfos) && !empty($this->extInfos)) { foreach ($this->extInfos as $extInfo) {
			$frontRecordStr = '';
			if (is_array($extInfo['infos'])) {
				foreach ($extInfo['infos'] as $k => $record) {
					$prefix = $k == 4 ? '<br />' : '';
					$frontRecordStr .= $record['online_count'] . ' (' . date('Y-m-d H:i:s', $record['time']) . '), ' . $prefix;
				}
			}
	  ?>
        <tr>
		  <td><?php echo $extInfo['daytime']; ?></td><td><?php echo $extInfo['average'] . '(' . $extInfo['sum'] . '/' . $extInfo['count'] . ')'; ?> </td><td><?php echo $frontRecordStr; ?></td>
        </tr>
      <?php } } ?>
      </tbody>
    </table>
</div>

</body>
</html>
