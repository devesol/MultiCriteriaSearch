<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

show = function(){
        $("#myp").show();
    }
    ;
    hide = function(){
        $("#myp").hide();
    }
    ;
   
</script>
</head>
<body>

<p>This is a paragraph.</p>
<p id="myp">This is my paragraph.</p>

<!--<button class="btn1" onClick="alert('je clique dessus')" onMouseOver="alert('jepasse dessus')">test evenement</button> -->
<button class="btn2" onclick="show()">Show</button>
<button class="btn2" onclick="hide()">Hide</button>

</body>
</html>
