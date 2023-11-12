<html>
    <body>
    <form action="a1.php" method="post" enctype="multipart/form-data">


    
     <input type="file"  name="image"><br/>
    
     
      <input type="text" name="capatcha" />
     
     


     <input type="submit" name="s" > <br/>


     <?php $x=rand(1,5);$y=rand(1,5); echo $x."+".$y."=?";   ?>


     
</form>



       </body>
       </html>

      
      
      
      
      
      <?php
      $sum=$x+$y;
      $sum1=(int)$_POST["capatcha"];
      

      if($sum==$sum1){
        echo "true";

      
     define("MB",132133);




       $filename=$_FILES["image"]["name"];
       $tempnam=$_FILES["image"]["tmp_name"];
       $folder="image/".$filename;
       $type_image=array("png","jpg");
       $exp_image=explode('.',$filename);
       $end_image=end($exp_image);
       $image_size=$_FILES["image"]["size"];

       if(in_array($end_image,$type_image)) 
       {
if($image_size > 2*MB) {

    echo "size";

} else{
    if(move_uploaded_file($tempnam,$folder))
    { echo "image upload successfuly";} 
    else
    
{
echo"failed";

}


}



}
      }else{ echo "errr";}






?>