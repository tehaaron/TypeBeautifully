
var styles = ['test1','test2','test3'];

function renderPreview( event ) {
    target = event.target.id;
    
    console.log(target) // should say the class name
           
    for ( key in styles )
    {
        if ( styles[key] == target ) {
            $('#results').removeClass();
            $('#results').addClass(styles[key]).html( $('#textInput').val() );
            $('html, body').animate({ scrollTop: 600}, "slow");
        }
    }
};

function getCSS() {
    $.ajax({
        username: "tehaaron",
        password: "9975C9C8CA",
        url: "./test.php",
        data: "",
        contentType: "application/json; charset=utf-8",
        global:false,
        async: true,
        dataType: "json",
        success: function(jsonObj) {
           alert(jsonobj);
        }
    });
};

$(document).ready(function() {  
    
    $(".success").click( renderPreview );
    $(".secondary").click( getCSS );         
    
});