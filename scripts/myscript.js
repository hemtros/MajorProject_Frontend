$(document).ready(function() {
    
$('.register').submit(function(e) {
    e.preventDefault();
    var data = $(".register").serializeArray();
    $.ajax({
    			url: "http://localhost/backend/index.php/main/registration",
                type: "get",
    			data: data,
    			dataType: "json",
                success: function(info){
                    
                 //   recjson=info.stringify();
                console.log(info);
                },
                error: function(e){ 
                    console.log(e);
                }
    });
    });
    
    
    
    
});