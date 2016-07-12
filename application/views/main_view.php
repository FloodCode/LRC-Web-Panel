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
<p>Server communicates with Client by sending string commands. Once client accepts command, it sends back an binary representation of object LRCData. All data blocks in LRCData object are represented in big endian.</p>
<h2>Links</h2>
<p>Github:</p>
<ul>
    <li>LRC-Client repository - <a href="https://github.com/FloodCode/LRC-Client"><em>[here]</em></a></li>
    <li>LRC-Server repository - <a href="https://github.com/FloodCode/LRC-Server"><em>[here]</em></a></li>
    <li>LRCData node js library - <a href="https://github.com/FloodCode/lrcdata-reader-node"><em>[here]</em></a></li>
    <li>Web-Panel - <a href="https://github.com/olegio170/LRC-web-panel"><em>[here]</em></a></li>
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
<h2>Lorem ipsum</h2>
<p>
    Lorem ipsum <a href="/">link</a>, consectetur adipiscing elit. Quisque et <a href="/">fringilla tortor</a>, nec venenatis lacus. Etiam non ultrices lacus. Aenean vitae velit turpis. Cras fringilla sapien at ullamcorper cursus. Sed ac neque ut neque posuere gravida. Ut nec tincidunt nulla, ut venenatis lorem. Pellentesque elementum mi odio, non interdum felis pretium a. Phasellus sit amet rhoncus arcu.
</p>
<p>
    Maecenas molestie lectus eget efficitur euismod. Phasellus leo ligula, sollicitudin quis risus vitae, viverra tincidunt lectus. Vestibulum sed turpis bibendum, tristique mauris accumsan, efficitur purus. Curabitur ac vehicula purus. In et dictum felis. Praesent faucibus lorem eu magna ornare, id iaculis sapien dictum. Pellentesque tempus convallis massa, id condimentum lorem. Donec quis ligula eleifend, commodo arcu id, suscipit lacus. Nulla sagittis libero vel mauris lacinia molestie. Sed arcu turpis, feugiat ac arcu vitae, varius pharetra orci. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras blandit augue condimentum sapien facilisis molestie. Sed fringilla neque eget bibendum ullamcorper. Nullam eleifend volutpat diam et porta.
</p>
<p>
    Suspendisse sed finibus urna, vitae placerat lorem. Mauris pretium, nulla malesuada porttitor vehicula, ligula nisi blandit quam, a viverra ipsum mauris vitae neque. Donec vulputate fringilla nulla nec tempor. Donec nec rhoncus libero. Integer quis massa nisl. Donec vel mattis ex, non vulputate augue. Curabitur scelerisque magna vel mauris porttitor, feugiat vestibulum lorem congue. Morbi venenatis bibendum justo eu lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
</p>
<p>
    Morbi et convallis turpis, interdum efficitur odio. Integer dignissim, justo eu pulvinar cursus, lacus dolor pretium ipsum, vitae pellentesque ipsum risus ac quam. Mauris non ultricies sapien. Quisque fringilla sit amet nisl ac fringilla. Morbi elementum metus nec magna consequat auctor. Aenean in mauris interdum, placerat dui eget, ullamcorper enim. Sed aliquet blandit tincidunt. Vivamus commodo enim in egestas fermentum. Etiam sed ullamcorper metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer in lobortis libero.
</p>
<p>
    Nunc tincidunt iaculis nibh, at vulputate nisi malesuada id. Maecenas tristique id ligula sed euismod. Cras fermentum ligula vitae felis pharetra, vitae scelerisque mauris commodo. Pellentesque aliquam, mauris nec efficitur iaculis, eros lorem malesuada mi, vel fermentum nibh libero sit amet lorem. Vivamus lobortis condimentum urna id sollicitudin. Morbi in ultrices leo, vel luctus lectus. Vivamus lacinia elit at purus placerat bibendum. Integer consequat odio et accumsan aliquam. Nam auctor sodales ex sit amet blandit. Sed ac lectus in magna rutrum egestas. Maecenas sit amet laoreet magna. Aliquam sagittis aliquet tellus, posuere bibendum nibh condimentum blandit. Nullam at arcu molestie, pulvinar massa a, ornare tellus. Ut elementum mi condimentum, congue justo ac, tempus nisi. Duis arcu mi, pharetra quis interdum id, sagittis eget est.
</p>
<p>
    Vivamus semper mi eu est interdum, placerat feugiat erat pellentesque. In aliquet mollis massa, vulputate interdum quam pulvinar non. Praesent lacinia malesuada eros vel consectetur. Pellentesque mollis, metus et ullamcorper viverra, odio orci scelerisque mi, eu euismod nisl sem ut nisl. Mauris eu est porta, elementum lectus eget, consectetur lectus. Donec nibh lacus, rutrum at lacus ut, tempus eleifend nulla. Maecenas auctor fermentum vestibulum. Etiam ornare risus in magna tristique, quis convallis velit tincidunt. Donec pretium feugiat nunc, eu suscipit tellus convallis a. Suspendisse eget tellus sit amet neque interdum tincidunt ut ut felis. Donec placerat purus vitae erat posuere posuere. Vivamus eget felis velit. Nam aliquam maximus elementum. Vivamus commodo, mi eu sagittis tristique, lorem est dictum mi, at mollis dui nibh nec ligula. Morbi in tempor odio.
</p>