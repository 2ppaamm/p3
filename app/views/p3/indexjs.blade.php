 <!-- start: Javascript/JQuery that is only applicable to this page -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

    <script>
    var BASE = '/p3';  //getting the base url

    $(document).ready(function() {

        $('#numpara, #genpara, #tags').on('keyup change',function(e){
            e.preventDefault();

            // send restful message only if form is validated
            if($( "#loremsearch") .valid()) {
                var restmsg = BASE+'/list?numpara=' + $( "#numpara" ).val();
                if($( "#tags" ).is(':checked'))
                    restmsg = restmsg + '&tags=on';  // tags checked
                $.get(restmsg, function(data){
                    $('#usercontainer').html(data);
                })
            }
            else $('#usercontainer').html("<img src='http://www.totalgifs.com/simpsons/homer_simpson-1080.gif' class='col-md-12' />" +
                                            "<br /><h4>Spoiler... your input is not valid...</h4>");
        });

        $('#numuser,#profilecheck, #birthy').on('keyup change',function(e){
            e.preventDefault();

    // create restful message for ajax
            if($( "#usersearch" ) .valid()) {
                var restmsg = BASE+'/list?numuser=' + $( "#numuser" ).val();
                if($( "#birthy" ).is(':checked'))
                    restmsg = restmsg + '&birthdate=on';  // birthdate checked

                if($( "#profilecheck" ).is(':checked'))
                    restmsg = restmsg + '&profile=on';  // profile checked

            // send restful message only if form is validated
                $.get(restmsg, function(data){
                    $('#usercontainer').html(data);
                })
            }
            else $('#usercontainer').html(
                "<img src='http://img4.wikia.nocookie.net/__cb20130920142351/simpsons/images/e/e9/Pic_1187696292_8.jpg' class='col-md-12' /><br />" +         //generate an error output page if form is invalid
                "<h4>D'oh...If you want your users, get your input straight!</h4>")
        });
    });

    </script>

    <!-- end: Page Javascript -->
