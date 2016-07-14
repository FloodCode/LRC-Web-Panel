<h2>About</h2>
<p>
    Lambda Remote Control is a software that helps to administrate computers remotely.
</p>
<p>
    Lambda Remote Control (further as LRC) consist of Server and Client. Several clients can hold connection with the same Server. Once Client was started, it connects to Server through WebSocket data transfer protocol and sends authentication message, that contains unique Client identifier. If auth message doesn't income or auth message is wrong, Server closes WebSocket connection.
</p>
<p>
    After successful authentication, server can request different data from client by sending him an string message, like "get-data systeminfo". Once client gets this message, it should send json-serialized answer. If Server has accepted this answer, it should send string message "accepted", if data is recognized as good, or "declined", if data recognized as bad.
</p>
<p>
    <em>[Please don't trust it. This information is outdated]</em>
</p>
<h2>Features</h2>
<p>
    Currently LRC can to this stuff:
</p>
<ol>
    <li>Log IP address</li>
    <li>Log keystrokes</li>
    <li>Log clipboard data</li>
</ol>
<h2>Overview</h2>
<p>Server communicates with Client by sending string commands. Once client accepts command, it sends back a binary representation of LRCData object. All data blocks in LRCData object are represented in big endian.</p>
<h2>Links</h2>
<p>Github:</p>
<ul>
    <li>LRC-Client repository - <a href="https://github.com/FloodCode/LRC-Client"><em>[here]</em></a></li>
    <li>LRC-Server repository - <a href="https://github.com/FloodCode/LRC-Server"><em>[here]</em></a></li>
    <li>LRC-WebPanel repository - <a href="https://github.com/FloodCode/LRC-WebPanel"><em>[here]</em></a></li>
    <li>LRCData node js library - <a href="https://github.com/FloodCode/lrcdata-reader-node"><em>[here]</em></a></li>
</ul>
<p>Other:</p>
<ul>
    <li>Virtual-Key code - <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/dd375731(v=vs.85).aspx"><em>[here]</em></a></li>
    <li>Language code - <a href="https://msdn.microsoft.com/en-us/library/ee825488(v=cs.20).aspx"><em>[here]</em></a></li>
    <li>NodeJS ws module - <a href="https://github.com/websockets/ws"><em>[here]</em></a></li>
</ul>
<h2>LRCData file</h2>
<table class="table-data">
    <thead>    
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Offset</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Header</td>
            <td><em>header</em></td>
            <td>0x0000</td>
        </tr>
        <tr>
            <td>Data</td>
            <td><em>data</em></td>
            <td>0x0049</td>
        </tr>
    </tbody>
</table>
<h2>Header</h2>
<table class="table-data">
    <thead>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Offset</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>U8</td>
            <td><em>version</em></td>
            <td>0x0002</td>
        </tr>
        <tr>
            <td>S8[64]</td>
            <td><em>id</em></td>
            <td>0x0003</td>
        </tr>
        <tr>
            <td>S8</td>
            <td><em>type</em></td>
            <td>0x0043</td>
        </tr>
        <tr>
            <td>U32</td>
            <td><em>length</em></td>
            <td>0x0044</td>
        </tr>
    </tbody>
</table>