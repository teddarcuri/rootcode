<script>
	
	// Grab window dimensions
	var winWidth = $(window).width();
	var winHeight = $(window).height();

	// Code mirror Instantiation
	var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
	   mode: "php",
       theme: "solarized light",
	   lineNumbers: true,
	   tabSize: 5,
	});

     // Search bar Hover i/o
    $(".search").mouseover(function(){
    	$(this).focus().select();
    });
    $(".search").mouseout(function(){
    	$(this).blur();
    });
    $(".search").focus(searchFocus);
    $(".search").blur(searchBlur);

    // Resizeable Divs
    $(function() {
    	var winWidth = $(window).width();
    	$( "#viewer" ).resizable({minWidth: winWidth - 120, maxWidth: winWidth - 120});
  	});

  	// Calculate size of resizeable divs
    $(function() {
    	var codeHeight = $(".CodeMirror").height();
    	$("#viewer").height(winHeight - codeHeight - 55);

    	var viewHeight = $("#viewer").height();
    	$(".CodeMirror").height(winHeight - viewHeight - 55 );
    });

    $("#viewer").resize(function() {
    	var viewHeight = $("#viewer").height();
    	$(".CodeMirror").height(winHeight - viewHeight - 55);
    });

    // Toggle Toolbox
    $(".arrow").mouseenter(function(){
        $("#toolbox").slideDown(500);
    });

    $("#toolbox").mouseleave(function(){
        $(this).slideUp(500);
    });

    // Notifications
    $(function(){
        $(".welcome-msg").delay(4000).slideUp();
    });


</script>

</body>
</html>