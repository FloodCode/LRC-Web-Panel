<?php if ($data['state'] == 'no results'): ?>
<h2>No results</h2>
<?php elseif ($data['state'] == 'ok'): ?>
<h2>Keyboard data:</h2>
<?php include 'paginator.php' ?>
<table class="table-data" style="width: 100%;">
    <thead>
        <tr>
            <th style="width: 5%;">UID</th>
            <th style="width: 15%;">Process</th>
            <th style="width: 35%;">Title</th>
            <th style="width: 30%;">Text</th>
            <th style="width: 15%;">Event time</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['items'] as $item): ?>
        <tr>
            <td><a href="/user/index/?uid=<?php echo $item['user_id']; ?>"><?php echo htmlspecialchars($item['user_id']) ?></a></td>
            <td><?php echo htmlspecialchars($item['process']) ?></td>
            <td><?php echo htmlspecialchars($item['title']) ?></td>
            <td><?php echo htmlspecialchars($item['text']) ?></td>
            <td><?php echo htmlspecialchars($item['event_time']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php include 'paginator.php' ?>
<?php endif; ?>