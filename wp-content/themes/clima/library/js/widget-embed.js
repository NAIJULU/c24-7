/**
* Codigo embebido de Clima 24/7
*
*/
var id_widget = $("#inner-widget").attr('data-id');

if( isNaN(id_widget) )
{
	id_widget = 0;
}

$.ajax({
	type: 		"GET", 
	url: 		"../wp-admin/admin-ajax.php",
	data: { 
			'action'   : 'widget-embed',
			'id_widget': id_widget
	 	  },
})
.done(function(data) {

	if( $("#inner-widget").length > 0 )
	{
		$("#inner-widget").html(data);
	}

})
.fail(function() {
	throw "Error,no results";
});