function renderPreview( event ) {
    target = event.target.id;
    
    console.log(target) // should say the id name
           
            $('#results').removeClass();
            $('#results').addClass(target).html( $('#textInput').val() );
            $('html, body').animate({ scrollTop: 600}, "slow");

    console.log('start ajax')

    $.ajax({
        url: '../test.php',
        type: 'POST',
        data: {'name' : target},
        dataType: 'json',
        success: function(data) {
            var id = data[0];
            var stylename = data[1];
            var stylecss = data[2];
            $('#codeTest').html("<b>id: </b><br />"+id+"<br /><b> stylename: </b><br />"+stylename+"<br /><b> stylecss: </b><br />"+stylecss);
            console.log(data);
            console.log(id);
            console.log(stylename);
            console.log(stylecss);
        }
    });
};

$(document).ready(function() {  
    
    $(".success").click( renderPreview );
});