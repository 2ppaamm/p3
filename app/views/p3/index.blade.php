@extends('_master')

<!-- define a title for this page -->
@section('page_title')
     Developer's best friend
@stop

<!-- start: provide a header for the page -->
@section('header')
    <section id="header" class="heading" style="background: url(/img/homer.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-desc">
                        <h2>P3 /</h2>
                        <p>Developer's best friend</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
@stop
<!-- end: header -->

<!-- start: content/app for p3 -->
@section('content')

    <!-- begin:content -->
    <section id="content">
      <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-8 col-sm-8">
                <div class="row">
                    <div class="col-md-12 post-single">
                        <div class="heading-title">
                            <h2><a href="#">Developer's best friend</a></h2>
                        </div>
                        <div class="post-meta">
                            <span><em>By <a href="http://p1.pamelalim.org">Pamela Lim</a></em></span>
                            <span><em>On October 20, 2014</em></span>
                            <span><em>In <a href="http://dwa15.com/" target="_blank">DWA Course</a></em></span>
                        </div>
                        <blockquote>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ~</p>
                            <small>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</small>
                        </blockquote>

                        <!-- start: form and the output for the lorem ipsum generated -->
                        {{Form::open(array(
                            'url' => 'p3/list',
                            'id'=>'loremsearch',
                            'name'=>'loremsearch',
                            'class'=>'form-horizontal',
                            'method' => 'GET'
                        ))}}
    						<div class="form-body">
    							<h3 class="form-section">Sample Text Generator</h3>
                                {{Form::label('numpara', 'Number of paragraphs',array('class'=>"h4 col-md-4"))}}
                                <div class="form-group col-md-8 input-group">
                                        {{ Form::text('numpara',1, array(
                                            'id'=>'numpara',
                                            'class'=>'form-control input-lg',
                                            'min' => '1',
                                            'max' => '99',
                                            'step'=> '1',
                                            'pattern'=>'[0-9.]+'
                                        ))}}
								<span class="input-group-addon">
                                    {{ Form::button('Generate', array(
                                        'class'=>'btn btn-info btn-search',
                                        'id' => 'genpara',
                                        'type' => 'submit'
                                    )) }}
								</span>
                                </div>

                            </div>
                        {{Form::close()}}
                        <!-- end: form and output of paragraphs generated -->

                        <hr>

                        <!-- start: form and the output for users -->
                        {{Form::open(array(
                            'url' => 'p3/list',
                            'name'=>'usersearch',
                            'id' => 'usersearch',
                            'method' => 'GET'
                        ))}}
    						<div class="form-body">
    							<h3 class="form-section">User Generator</h3>
                                {{ Form::label('numuser', 'Number of users',array('class'=>"h4 col-md-4"))}}
   							    <div class="form-group">
                                    <div class="col-md-8 input-group">
                                        {{ Form::text('numuser','1', array(
                                            'id' => 'numuser',
                                            'class' => 'form-control input-lg',
                                            'min' => '1',
                                            'max' => '99',
                                            'step'=> '1',
                                            'pattern'=>'[0-9.]+'
                                         ))}}
                                        <span class="input-group-addon">
                                            {{ Form::button('Generate', array(
                                                'class'=>'btn btn-info btn-search',
                                                'id' => 'genuser'
                                            )) }}
                                        </span>
                                    </div>
                                    <div class="col-md-4 control-label">
                                        Add a birthdate
                                    </div>
                                    <div class="col-md-4 input-group">
                                        {{ Form::checkbox('birth','on',true, array(
                                            'id'=>'birthy'
                                        ))}}
                                    </div>
                                    <div class="col-md-4 control-label">
                                        Add a profile
                                    </div>
                                    <div class="col-md-4 input-group">
                                       {{Form::checkbox('profile','profile', true, array(
                                        'id'=>'profilecheck'
                                        )) }}
                                    </div>
                                </div>
                            </div>
                        {{Form::close()}}
                        <!-- end: form and output of users generated -->
                <hr>

                        <!-- start: lorem ipsum information -->
                        <h3>Some information about Lorem Ipsum</h3>

                        <img src="/img/lorem-ipsum-banner.jpg" alt="lorem ipsum">

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <!-- end: lorem ipsum information -->

                    </div>
                </div>

                <hr>
                <!-- begin:comments -->
                <!-- end:post-comment -->
            </div>
            <!-- end:article -->

            <!-- begin:sidebar -->
            <div class="col-md-4 col-sm-4 sidebar">
                <div class="widget-sidebar">
                    <h3>Result of Search</h3>
                    <div id="usercontainer" style="border: dashed; border-color:#960000; background-color: lightgrey; padding: 15px">
                        @yield('outputinfo')
                    </div>

                </div>

            </div>
            <!-- end:sidebar -->

        </div>
      </div>
    </section>
    <!-- end:content -->
@stop

<!-- start: Javascript/JQuery that is only applicable to this page -->

@section('page_js')
// start: handles ajax paragraph search
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

<script>
    var BASE = <?php URL::current(); ?>
$(document).ready(function() {

// Prevents the generators from triggering when users press the enter key
    $('input[type=text]').on('keydown', function(e) {
        if (e.which == 13) {
            e.preventDefault();
        }
    });

// jquery codes to track changes in the number of paragraphs requested

    $('#numpara, #genpara').on('keyup change click',function(e){
        e.preventDefault();

        // send restful message only if form is validated
        if($( "#loremsearch") .valid()) {
            $.get('p3/list?numpara=' + $( "#numpara" ).val(), function(data){
                $('#usercontainer').html(data);
            })
        }
        else $('#usercontainer').html("<img src='/img/404.png' class='col-md-12' /><br /><h4>O Bammer, your input is not valid...</h4>")
    });

    $('#numuser,#profilecheck, #birthy, #usersubmit, #genuser').on('change keyup mouseup',function(e){
        e.preventDefault();

        // create restful message for ajax
        if($( "#usersearch" ) .valid()) {
            var restmsg = 'p3/list?numuser=' + $( "#numuser" ).val();
            if($( "#birthy" ).is(':checked'))
                restmsg = restmsg + '&birthdate=on';  // checked

            if($( "#profilecheck" ).is(':checked'))
                restmsg = restmsg + '&profile=on';  // checked

        // send restful message only if form is validated
            $.get(restmsg, function(data){
                $('#usercontainer').html(data);
            })
        }
        else $('#usercontainer').html("<img src='/img/404.png' class='col-md-12' /><br /><h4>O Bammer, your input is not valid...</h4>")
    });
});

</script>

@stop
<!-- end: Page Javascript -->