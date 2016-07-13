<?php if ($data['state'] == 'no results'): ?>
<h2>User not found</h2>
<?php elseif ($data['state'] == 'ok'): ?>
<h2>User #<?php echo $data['user']['id']; ?></h2>
<p><?php echo $data['user']['id']; ?></p>
<?php endif; ?>