<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ambiente de teste</title>
    <style>
        .rect{
            width: 100%;
            height: 556px;
            border: 1px solid;
        }
    </style>
</head>
<body>
    
    <h2>Bem-vindo ao ambiente de teste</h2>

    <div class="rect">
        
    </div>
    
    <script>

        var rec = document.querySelector(".rect");

        
        rec.addEventListener("touchmove", function(){
            var point_initial;
            rec.addEventListener("touchstart", e =>{
                point_initial = e.changedTouches[0].clientX;
                
                rec.addEventListener("touchend", e => {
                    if(e.changedTouches[0].clientX > point_initial){
                        console.log("é maior")
                    }else{
                        console.log("é menor")
                    }
                });
            });
            
        })
        
    </script>

</body>
</html>