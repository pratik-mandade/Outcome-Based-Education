<?php
 
if(isset($_POST['submit'])){
    //get the string
    $string = $_POST['string'];
 
    
    $word_count = 0;
    
    //check if the string is not empty then allow it
    if(!empty($string)){
        
        print $string."<br><br>"; 
        //lets remove special characters and numbers and keep only A to Z and a to z 
        $string_only_alphabets = preg_replace("/[^A-za-z]/", " ", $string);
 
        //remove unwanted space between words
        $string_only_single_space = preg_replace("/\s+/", " ", $string_only_alphabets);
 
        $word_count = count(explode(' ', trim($string_only_single_space)));
    }
    
    print "Sentence has <b>$word_count</b> word(s)!";
}
    
?>
 
<html>
    <body>
        <h2>Custom PHP program to count the number of words in a string.</h2>
        <form action="" method="post">
            <h3>Write a sentence</h3>
            <textarea name="string"></textarea><br /><br />
            <button name="submit" type="submit">Find Words!</button>
        </form>    
    </body>
</html>