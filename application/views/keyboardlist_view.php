<h2>Keyboard data:</h2>

<div class="content-box">
    <div class="content-title">
        <p>Search</p>
    </div>
    <div class="content-block">
        <label>Process</label>
        <input class="small" type="text" value="<?php if (isset($data['params']['proc'])) { echo $data['params']['proc']; } ?>" id="s-process">
        <label>Title</label>
        <input class="small" type="text" value="<?php if (isset($data['params']['title'])) { echo $data['params']['title']; } ?>" id="s-title">
        <label>Text</label>
        <input class="small" type="text" value="<?php if (isset($data['params']['q'])) { echo $data['params']['q']; } ?>" id="s-text">
        <input id="s-withtext" type="checkbox" name="s-withtext" value="1"<?php if (isset($data['params']['withtext'])) { echo ' checked="checked"'; } ?>><label for="s-withtext"><span></span>With text</label>
        <button onclick="doSearchKeyboard()">Search</button>
    </div>
</div>

<?php if ($data['state'] == 'no results'): ?>
<div style="text-align: center;">
    <h2>No results</h2>
</div>
<?php endif; ?>

<?php if ($data['state'] == 'ok'): ?>
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