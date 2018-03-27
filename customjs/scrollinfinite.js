/**/


	/*scroll to the bottom of the country container on page load*/
	$(window).ready( function() 
        {
            $('#countries-container').scrollTop($('#countries-container')[0].scrollHeight);
        });
	/*holds the value of the id of the last name to be loaded*/
    var last_id;
    /*controlls when to stop ajax calls*/
    var ajaxcall = true;

    	/*scroll eventlistener*/
	$(window).ready( function()
        {
            $('#countries-container').scroll( function() 
            {
    			/*show the position from the top*/
    			/*not really neccessary, just helps get a grimps of what is going on*/
    			/*uncomment the line below to see the effect on scroll*/
    			//$("#scroll").html("-"+$('#countries-container').scrollTop());

    			// if scroll is almost at the top
    			if ($('#countries-container').scrollTop() <= 30) 
    			{
    				/*get the id of the name container that is at the top of the country container*/
    				last_id = $(".country-name:first").attr('id');

    				/*get the older names from the database*/
    				loadMoreData(last_id);
    			}
            });
        });

    function loadMoreData(last_id)
    {
    	/*if the ajaxcall controller is set to true*/
    	if (ajaxcall)
    	{
    		$.ajax(
    		{
				url: 'ajaxChatResponce.php?last_id=' + last_id,
				type: "get",
				//async: false,
				beforeSend: function()
                {
                	/*show the loading alert*/
                    $("#countries-container").prepend("<div id='country-loading' class='alert alert-info'>" +
															"<p>loading . . .s</p>" +
													"</div>");
                    /*stop the ajaxcall to prevent the same request from being resent before the country is updated*/
                   	ajaxcall = false;
                },
                success:function(data)
                {
                	//console.log(last_id);
                	/*remove the loading alert*/
                	$('#country-loading').remove();
                	if (!data)
                	{
                		/*show the no mo names alert*/
						$("#countries-container").prepend("<div id='country-nonames' class='alert alert-warning'>" +
															"<p>No more names</p>" +
													"</div>");
						/*stop any more ajax requests from being sent since there are no more names for the user in the database*/
                    	ajaxcall = false;
                    	return false;
                	}else
                	{
                		/*add the old chats on top of the countries-container div*/
						$("#countries-container").prepend(data);
						/*re-enable ajaxcalls*/
						ajaxcall = true;
						return true;
                	}
                },
    		});
    	}
 		   
    }