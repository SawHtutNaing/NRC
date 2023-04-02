<?php 
require_once "./header.php";
// dd($lists);

$Nrc_code =  uniqueCode($lists)
?>
    <h1>Myanmar NRC </h1>

    <div>

        <select name="nrc_id" id="forParent">
      
        </select>
        <input type="text" value="state_name">
       <select name="nrc_type" id="">
        <option value="N">N</option>
        <option value="N">aည့်</option>
        <option value="N">ပြု</option>
       </select>
       <input type="text" name="nrc_number">



    </div>
    <div  id="div"></div>

<?php 

require_once "./footer.php";

?>



