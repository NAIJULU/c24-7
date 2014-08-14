function urlValidator(id)
{
	var url = jQuery('#'+id).val();

	jQuery.ajax({
		type: "GET",
		url: "../wp-content/plugins/re-cursos/val.php",
		data: { 
			'url' : url,
		},
	})
	.done(function(data) {

		if(data != 200)
		{
			jQuery('#'+id).css('border-color','rgba(221, 22, 22, 1)');
			jQuery('#'+id).attr('title',data);
		} 
		else
		{
			jQuery('#'+id).css('border-color','rgba(63, 240, 78, 1)');
			jQuery('#'+id).attr('title','200 OK');	
		}

	});
}