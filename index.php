<?php
/*include the lang array on the page depending on the language slected by the user.*/
if(isset($_GET['lang']) && ($_GET['lang']=="En" || $_GET['lang']=="Fr") )	
    include($_GET['lang'].".php");
else
    /*This is to include the default lang on the pagethe first time the user comes on the page.*/
    include("En.php"); 
?>

<br/>
<br/>

<div class="well">
    <a href="?lang=En">English</a> | <a href="?lang=Fr">French</a>
</div>

<br/>
<br/>

<div class="well">
<?php
echo $lang["Hello"]."<br>";
echo $lang["My name is"]." Nikabou Biteme Innocent DJETELI"."</br>";
echo $lang["I am a software Engineer"]."</br>";
?>
</div>
