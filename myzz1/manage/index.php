












<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title></title>
        <script type="text/javascript" src="../plugins/jquery-easyui-1.3.4/jquery-2.0.min.js"></script>
    </head>
    <body>

    <script type="text/javascript" charset="utf-8">
        
        function login(){
            if($("#Username").val()!="" && $("#Password").val()!=""){
                $.ajax({
                    type:"POST",
                    url:"CheckUser.php",
                    data:{'Username':$("#Username").val(),'Password':$("#Password").val()},
                    datatype:"text",
                    success:function(data){
                        alert(data);
                    }


                });
            }else{
                alert('pleas ....');
            }
        }

        function freset(){
            $("Username").val() = "";
            $("Password").val() = "";
        }
        
    </script>

    <div>
        <input type="text" name="username" id="Username" placeholder="Username"/>
        <input type="text" name="password" id="Password" placeholder="Password"/>
        <input type="image" name="submit" id="submit" src="" onclick="login();" />
        <input type="image" name="submit" id="" src="" value='reset' onclick="freset();" />
    </div>
        
    </body>
</html>
