<?php

class View
{
	function generate($content_view, $template_view, $data = null)
	{
	    // common template load
		include 'application/views/'.$template_view;
	}
}
