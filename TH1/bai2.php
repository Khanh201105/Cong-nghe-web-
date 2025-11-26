<?php 
    //load câu hỏi

    $quizfile = fopen('Quiz.txt','r') or die ("Lỗi mở file");
    $content = fread($quizfile, filesize("Quiz.txt"));
    fclose($quizfile);
    echo nl2br($content);
?>