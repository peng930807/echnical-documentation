/**
     * [jsPost 使用js动态获取表的值并使用js模拟post方式提交表单数据---js函数---]
     * @param [string] url    [提交地址]
     * @param [obj]    params  [提交的数据JSON结构{'test':value}]
     * @param [type]   target  [设置何处打开链接文档（可选）]
     */
    function jsPost( url, params, target){  
        var tempform = document.createElement("form");  
        tempform.action = url;  
        tempform.method = "post";  
        tempform.style.display="none"  
        if(target) {  
            tempform.target = target;  
        }  
      
        for (var x in params) {  
            var opt = document.createElement("input");  
            opt.name = x;  
            opt.value = params[x];  
            tempform.appendChild(opt);  
        }  
      
        var opt = document.createElement("input");  
        opt.type = "submit";  
        tempform.appendChild(opt);  
        document.body.appendChild(tempform);  
        tempform.submit();  
        document.body.removeChild(tempform);  
    } 