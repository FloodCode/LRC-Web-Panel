function doSearchKeyboard() {
    
    var args = [];
    var sProcess = document.getElementById('s-process');
    var sTitle = document.getElementById('s-title');
    var sText = document.getElementById('s-text');
    var sWithText = document.getElementById('s-withtext');
    
    var valueBuffer;
    
    if (sProcess !== null) {
        
        valueBuffer = sProcess.value;
        
        if (valueBuffer != null && valueBuffer != '') {
            var arg = {
                key: 'proc',
                value: valueBuffer
            };
            args.push(arg);
        }
        
    }
    
    if (sTitle !== null) {
        
        valueBuffer = sTitle.value;
        
        if (valueBuffer != null && valueBuffer != '') {
            var arg = {
                key: 'title',
                value: valueBuffer
            };
            args.push(arg);
        }
        
    }    
    
    if (sText !== null) {
        
        valueBuffer = sText.value;
        
        if (valueBuffer != null && valueBuffer != '') {
            var arg = {
                key: 'q',
                value: valueBuffer
            };
            args.push(arg);
        }
        
    }
    
    if (sWithText !== null) {
        valueBuffer = sWithText.checked;
        
        if (valueBuffer != null && valueBuffer != false) {
            var arg = {
                key: 'withtext',
                value: true
            };
            args.push(arg);
        }
    }
    
    console.log(args);
    
    var query = '';
    
    var i = 0;
    for (i = 0; i < args.length; i++) {
    
        
        if (i !== 0) {
            query += '&';
        }
        
        query += args[i].key + '=' + args[i].value;
    }
    
    if (query !== '') {
        window.location = '/keyboardlist/index/?' + query;
    } else {
        window.location = '/keyboardlist/index/';
    }
    
}