$('input[type="text"]').on("keypress", function(evt){
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode;
    if ((ASCIICode < 65 || ASCIICode > 90) && (ASCIICode < 97 || ASCIICode > 122) && evt.which != 32){
        return false;
    }else{
        return true;
    }
});


$('#mobile, #shopMobile').on("keypress", function(evt){
    var $this = $(this);
    var value = $this.val();
    if(value.length >= 10){
        return false;
    }
});

