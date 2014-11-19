/**
* Codigo embebido de Clima 24/7
*
*/
var widget      = document.getElementsByClassName("inner-widget");
var id_widget   = widget[0].getAttribute("data-id");
var http_request = false;

if( isNaN(id_widget) )
{
	id_widget = 0;
}

widget_embed();

function widget_embed()
{
    url          = 'http://localhost/c24-7/wp-admin/admin-ajax.php?action=widget_embed&id_widget='+id_widget;

    if (window.XMLHttpRequest) 
    { // Mozilla, Safari,...
       http_request = new XMLHttpRequest();
       if (http_request.overrideMimeType) 
       {
          http_request.overrideMimeType('text/xml');
       }
    } 
    else if (window.ActiveXObject) 
    { // IE .. si ven por que me cae tan mal
        try 
        {
        	http_request = new ActiveXObject("Msxml2.XMLHTTP");
        		
        } catch (e) 
        {
        	try 
        	{
        		http_request = new ActiveXObject("Microsoft.XMLHTTP");
        	} 
            catch (e) 
            {

            }
        }
    }

    if (!http_request) 
    {
        throw("can't make an instance XMLHTTP");
        return false;
    }

    http_request.onreadystatechange = doneRequest;
    http_request.open('GET', url, true);
    http_request.send();

}


function doneRequest()
{
    if (http_request.readyState == 4) 
    {
        if (http_request.status == 200) 
        {
            var response = http_request.responseText;
            widget[0].innerHTML = response;
           
        } else 
        {
            throw('Error: no results.');
        }
    }
}

/*
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

<script>window.jQuery || document.write('<script src="jquery-x.x.x.min.js"><\/script>')</script>
*/



