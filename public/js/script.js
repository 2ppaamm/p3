$(document).ready(function(){

	/* Navbar */
	$(window).scroll(function(){
		if( $(window).scrollTop() > 80){
			$('.navbar').removeClass('navbar-transparent');
		}else{
			$('.navbar').addClass('navbar-transparent');
		}
	});

  /* Set Column Portfolio */
  function splitColumns() { 
    var winWidth = $(window).width(), columnNumb = 1;
    if (winWidth > 1200) {
      columnNumb = 4;
    } else if (winWidth > 992 && winWidth < 1200) {
      columnNumb = 4;
    } else if (winWidth > 768 && winWidth < 992) {
      columnNumb = 2;
    } else if (winWidth > 480 && winWidth < 768) {
      columnNumb = 2;
    } else if (winWidth < 480) {
      columnNumb = 1;
    }
    return columnNumb;
  }

  function setColumns() { 
    var winWidth = $(window).width(), columnNumb = splitColumns(), postWidth = Math.floor(winWidth / columnNumb);
    $wrapper.find('.wrapper-portfolio li').each(function () { 
      $(this).css( { 
        width : postWidth + 'px' 
      });
    });
  }

  $(window).bind('resize', function () {
    setProjects();          
  });
 
	//$('#map').gmap3('get').setCenter(new google.maps.LatLng(-7.866315,110.389574));
    
    /* Toggle Map */	
	var mapContainer = $('.mapcontainer');
	$('#openmap').on('click', function(){
		$(this).toggleClass('closemap');
		$('#map').toggleClass('showMap');
		mapContainer.toggleClass('hidecontainer');
		$('#map').gmap3('get').setCenter(new google.maps.LatLng(-7.866315,110.389574));
	});

	
});