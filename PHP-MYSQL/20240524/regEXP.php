<h2>pregmatch</h2>
<?php
$input="Sam loves his mother";
$pattern="/(fa|mo)ther/";

if(preg_match($pattern, $input)){//
    echo "matched!";
}else{
    echo "not matched!";
}
?>
<h2>preg replace</h2>
<?php
$input2="hello world hello";
$pattern2="/hello/";
$output=preg_replace($pattern2, "hi", $input2);
echo $output;