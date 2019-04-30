<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
            <title>用户登陆</title>
    </head>
    <body>
        <form action="" method="post" id="servicecost" enctype="multipart/form-data">         
                <h6>用户名：</h6>
                <p><input class="tbox30" type="text" value="" name="user_name" id="user_name"></p>
                <h6>密码：</h6>
                <p><input class="tbox30" type="password" value="" name="password" id="password"></p>
                <h6>&nbsp;</h6><input class="btn-1" type="submit" id="sub" value="提交">
        </form>
    </body>
</html>




<script src='jsencrypt.min.js'></script>
<script src='jquery-2.1.4.min.js'></script>
<script>
    
    $("#sub").click(function(){
        var username = RSA_openssl($("#user_name").val());
        var pwd = RSA_openssl($("#password").val());
        $.post('user.php',{username:username,pwd:pwd},function(data){
            if(data.err==1){
                alert(data.msg);
            }else{
                alert(data.msg);
            }
        },'json');
        return false;
    });
    
    
    function RSA_openssl(str){
         var encrypt = new JSEncrypt();
        encrypt.setPublicKey('MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDWC8CNLIAyKpI9cooqUrXAOd3YSmW014qdSlfEm1+Y355jK/1bsf/WwB6hvZ/9mmj6+Ij4pwAoOl7C2oiuQHj9XE3p7kuPA8ZHz63eoL1DTFXaTyFBTPyeap6srkpfaQYZ8WCrCxfjakxa632yMYT5OzdgiJyw4LSFpERHUEcV5wIDAQAB');//公钥
        var encrypted = encrypt.encrypt(str);
        return encrypted;
    }
     
      
</script>

