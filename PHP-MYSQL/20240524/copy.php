<?php
if(file_exists("test.html")){
    copy("test.html", "new-test.html");
}