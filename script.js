$(document).ready(function(){
     //alert("You have to agree to the Terms and Conditions !");
    
    var checkbox=0;
    var radio=0;

    $('#conditions').change(function(){
        if($(this).prop("checked")) {
            checkbox=1;
            console.log("Checbox = "+checkbox);
        } else {
            checkbox=0;
        }
    });
    
    $('.radio').change(function(){
        if($(this).prop("checked")) {
            radio=1;
            console.log("Radio = "+radio);
        } else {
            radio=0;
        }
    });
    
    
    
    $("#btnVote").click(function(){
        console.log("Checbox = "+checkbox);
        if(checkbox==0 && radio==0){
            alert("You have to agree to the Terms and Conditions ! You have to choose one app !");
        }else if(radio==0){
            alert("You have to choose one app !");
        }else if(checkbox == 0){
            alert("You have to agree to the Terms and Conditions !");
        }else if(checkbox==1 && radio==1){
            $("#form").submit();
        }
    });
});