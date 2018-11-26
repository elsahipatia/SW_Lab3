<?php
$link = mysqli_connect("localhost","root","","quizz");
$sql = "INSERT INTO preguntas(email, enunciado, correct, incorrect1, incorrect2, incorrect3, complejidad, tema, foto) VALUES ('$_POST[email]','$_POST[correct]','$_POST[incorrect1]','$_POST[incorrect2]','$_POST[incorrect3]',$_POST[complexity],'$_POST[subject]','$_POST[examine]')";
if (!mysqli_query($link ,$sql))
{
    die('Error: '.mysqli_error($link));
}
echo "1 record added";
mysqli_close($link);
?>