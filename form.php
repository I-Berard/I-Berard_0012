<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){

$name=$_POST['name'];    
$email=$_POST['email'];    
$age=$_POST['age'];    
$color=$_POST['color'];
$element;    

}

?>
<html>
    <title>Results of your inputs</title>
    <body>
        <h1>Results of your inputs</h1>
        <table border="1" cellspacing="0" width="800">
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Age</th>
                <th>Favourite color</th>
            </tr>
            <tr>
                <td><?php echo "$name"; ?></td>
                <td><?php echo "$email";?></td>
                <td><?php echo "$age";?></td>
                <td><?php foreach ($color as $element){
                    echo $element . ",";
                };?></td>
            </tr>    
        </table>
    </body>
</html>