/**
* Codigo embebido de Clima 24/7
*
*/
var id_widget = $(".inner-widget").attr('data-id');

if( isNaN(id_widget) )
{
	id_widget = 0;
}

widget_embed();


function widget_embed()
{
	$.ajax({
	type: 		"GET", 
	url: 		"http://localhost/c24-7/wp-admin/admin-ajax.php",
	data: { 
			'action'   : 'widget_embed',
			'id_widget': id_widget
	 	  },
	})
	.done(function(data) {

		if( $(".inner-widget").length > 0 )
		{
			$(".inner-widget").html(data);
		}

	})
	.fail(function() {
		throw "Error,no results";
	});
}

