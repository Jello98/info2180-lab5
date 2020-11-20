$(document).ready(function(){
    $("#lookup").click(function(){ 
        var Cname= $('#country').val();
        $.ajax({
            url: 'world.php', 
            data:{country:Cname},
            success: function(data) 
            {
                $('#result').html(data);  
            }
        });
    });  
    $("#lookup2").click(function(){ 
        var Cname= $('#country').val();
        $.ajax({
            url: 'world.php', 
            data:{context:Cname},
            success: function(data) 
            {
                $('#result').html(data);  
            }
        });
    }); 
});
