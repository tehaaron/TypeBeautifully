
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

function getCSS(){
    console.log('start getCSS')

    $.ajax({
        url: 'test.php',
        data: "",
        dataType: 'json',
        success: function(data) {
            var id = data[0];
            var stylename = data[1];
            var stylecss = data[2];

            $('#codeTest').append("<b>id: </b><br />"+id+"<b> stylename: </b><br />"+stylename+"<b> stylecss: </b><br />"+stylecss);
        }
    });
};

$(document).ready(function() {  
    
    $(".success").click( renderPreview );
    $(".secondary").click( getCSS );         
    
});