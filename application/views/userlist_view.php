<?php if ($data['state'] == 'no results'): ?>
<h2>No results</h2>
<?php elseif ($data['state'] == 'ok'): ?>
<h2>Users:</h2>
<table class="table-data" style="width: 100%;">
    <thead>
        <tr>
            <th style="width: 5%;">UID</th>
            <th style="width: 25%;">Name</th>
            <th style="width: 15%;">IP</th>
            <th style="width: 5%;">Lat.</th>
            <th style="width: 10%;">OS</th>
            <th style="width: 15%;">CPU</th>
            <th style="width: 10%;">RAM</th>
            <th style="width: 15%;">Signup time</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['items'] as $item): ?>
            <tr>
                <td style="text-align: center;"><a href="/user/index/?uid=<?php echo $item['id']; ?>">[<?php echo $item['id'] ?>]</a></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['ip'] ?></td>
                <td style="text-align: center;"><?php echo $item['latency'] ?></td>
                <td><?php echo $item['os'] ?></td>
                <td><?php echo $item['cpu'] ?></td>
                <td style="text-align: center;"><?php echo $item['ram'] ?></td>
                <td style="text-align: center;"><?php echo $item['signup_time'] ?></td>
            </tr>
        
    <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>