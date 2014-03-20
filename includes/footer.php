<script>
	///////////////////////////////////
	// Grab window dimensions
    ///////////////////////////////////
	var winWidth = $(window).width();
	var winHeight = $(window).height();
    
    ///////////////////////////////////
	// Code mirror Instantiation
    ///////////////////////////////////
	var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
	   mode: "php",
       theme: "solarized light",
	   lineNumbers: true,
	   tabSize: 5,
	});

    ///////////////////////////////////
    // Search bar Hover i/o
    ///////////////////////////////////
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

    ///////////////////////////////////
  	// Calculate size of resizeable divs
    ///////////////////////////////////
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

    ///////////////////////////////////
    // Toggle Toolbox
    ///////////////////////////////////
    $(".arrow").mouseenter(function(){
        $("#toolbox").slideDown(500);
    });

    $("#toolbox").mouseleave(function(){
        $(this).slideUp(500);
    });

    ///////////////////////////////////
    // THEMES
    ///////////////////////////////////
    $("#jungle-toggle").click(function(){
        $("#viewer").css('background-image', 'url(assets/forest-bg.jpg)');
    })

     $("#sleek-toggle").click(function(){
        $("#viewer").css('background', 'linear-gradient(to top,black, #252525)');
    })

    ///////////////////////////////////
    // Login Form
    ///////////////////////////////////
    $(function(){
        $("#login-form").fadeIn(2000);
    })
    
    $("#login-form").click(function(){

        $(".med-logo").attr("src", "assets/ajax-loader.gif");

        $("#login-form").delay(2000).animate({'margin-top': "-=2000"}, 2000, function(){
            $("#login-form").hide();
        });

    });


</script>

</body>
</html>