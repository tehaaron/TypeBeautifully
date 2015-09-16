function showPanel() {

    $('.panel').stop().show().animate({
        right: '0px'
    });

   // $('#application-frame').stop().animate({
   //     marginRight: '450px'
   // });

    $('#slide-out-menu').stop().animate({
        marginRight: '450px'
    });
}

function hidePanel() {

    $('.panel').stop().animate({
        right: '-450px'
    }, function(){
        $(this).hide();
    });
    

    //$('#application-frame').stop().animate({
    //    marginRight: '0px'
    //});

    $('#slide-out-menu').stop().animate({
        marginRight: '0px'
    });
}

function slidePanel( event ) {
    target = this.id;

    console.log( event );
    console.log( target );

    $('#slide-out-menu').delegate('.item:not(.slide-active)', 'click', function() {
    var $this = $(this);
    
    $('.slide-active').removeClass('slide-active');
    $this.addClass('slide-active');
    
    //if ( target == 'styles-menu') {
    //    $('.panel').load('../styles.html'); } 
    //else {
    //    $('.panel').html('Not Styles');
    //}

    showPanel();
    });

    $('#slide-out-menu').delegate('.slide-active', 'click', function() {

    $(this).removeClass('slide-active');
    
    hidePanel();
    });
};

$(document).ready(function() {  
    
    $(".item").click( slidePanel );
});
