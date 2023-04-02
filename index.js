
function load_nrc( ){
// choose default 

$.ajax({
    url: "req_test.php",
    type: "POST",
     
            data: "min g alar par ",
    
            success:function(result){
                console.log(result.abc);
            }
});

   

  


}

window.addEventListener("load", () => {
    load_nrc()
  });



