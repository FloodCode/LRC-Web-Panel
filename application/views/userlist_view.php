<?php if ($data['state'] == 'no results'): ?>
<h2>No results</h2>
<?php elseif ($data['state'] == 'ok'): ?>
<h2>Users:</h2>
<table class="table-data" style="width: 100%;">
    <thead>
        <tr>
            <th style="width: 5%;">UID</th>
            <th style="width: 10%;">Name</th>
            <th style="width: 55%;">SHA256</th>
            <th style="width: 15%;">IP</th>
            <th style="width: 15%;">Signup time</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['items'] as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['sha256'] ?></td>
            <td><?php echo $item['ip'] ?></td>
            <td><?php echo $item['signup_time'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>