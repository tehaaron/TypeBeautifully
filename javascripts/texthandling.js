$(document).on('click', '.apply-style', function renderPreview( event ) {
    console.log( event );
    console.log( event.target );

    target = event.target.id;
    
    console.log(target); //should say the id name

            $('#results').removeClass();
            $('#results').addClass(target).html( $('#source-textarea').val() );
            $('#workspace-tabs a:last').tab('show');

    console.log('start ajax')

    $.ajax({
        url: '../applystyle.php',
        type: 'POST',
        data: {'name' : target},
        dataType: 'json',
        success: function(data) {
            var styleid = data[0];
            var stylename = data[1];
            var stylecss = data[2];
            $('#code').empty();
            $('#code').append("<b>id: </b><br />"+styleid+"<br /><b> stylename: </b><br />"+stylename+"<br /><b> stylecss: </b><br />"+stylecss);
        }
    });
});

$(document).on('ready', function loadStyles() {
    $.getJSON('../loadstyles.php', function(styles) {
        $(styles).each(function(index, style){
            $('#styles-list').append(
                '<li class="style-unit" data-stylefonts="'+style.stylefonts+'" data-styleelements="'+style.styleelements+'" data-styledesigner="'+style.styledesigner+'" data-stylecategory="'+style.stylecategory+'"><div>'+style.stylename+'<button type="button" class="btn btn-mini btn-warning expand-details" data-toggle="collapse" data-target="&#35;'+style.stylename+'-details"><p>V</p></button><button type="button" class="btn btn-mini btn-primary apply-style"><p id="'+style.stylename+'">Apply Style</p></button></div><div id="'+style.stylename+'-details" class="collapse">'+style.stylecss+'</div></li>'
                );
        });
        $('.expand-details').click(function() {
            $(this).button('toggle');
            console.log(this);
        });
    });
});