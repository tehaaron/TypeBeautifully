$(document).ready(function loadStyles() {
	$.getJSON('../loadstyles.php', function(styles) {
		$(styles).each(function(index, style){
			$('#styles').append(
				'<div class="style-unit"><div>'+style.stylename+'<button type="button" class="btn btn-mini btn-warning expand-details" data-toggle="collapse" data-target="&#35;'+style.stylename+'-details"><p>V</p></button><button type="button" class="btn btn-mini btn-primary apply-style" id="'+style.stylename+'"><p>Apply Style</p></button></div><div id="'+style.stylename+'-details" class="collapse">'+style.stylecss+'</div></div>'
				);
		});
		$('.expand-details').click(function() {
			$(this).button('toggle');
		});
		$(".apply-style").click( renderPreview );
	});
});
