@extends('_master')

<!-- define a title for this page -->
@section('page_title')
     Developer's best friend
@stop

<!-- start: provide a header for the page -->
@section('header')
    <section id="header" class="heading" style="background: url(/img/lorem-ipsum-banner.jpg);">
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
                        {{Form::open(array('url' => 'p3','name'=>'loremsearch','class'=>'form-horizontal','onchange'=>'findPara(this)'))}}
    						<div class="form-body">
    							<h3 class="form-section">Sample Text Generator</h3>
                                {{Form::label('numpara', 'Number of paragraphs',array('class'=>"h4 col-md-3"))}}
                                <div class="form-group">
                                    <div class="col-md-8 input-group">
                                        {{Form::text('numpara',3, array('id'=>'numpara','readonly','class'=>'form-control input-lg'))}}
                                        <span class="input-group-addon">
                                            <i class="fa fa-arrow-up btn-info btn" id='paraup'></i>
                                            <i class="fa fa-arrow-down btn-info btn" id='paradown'></i>
                                            {{Form::button('More Paragraphs', array('class' => 'btn btn-info','onclick'=>'findPara(this)'))}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        {{Form::close()}}
                        <!-- end: form and output of paragraphs generated -->

                        <hr>

                        <!-- start: form and the output for users -->
                        {{Form::open(array('url' => 'p3','name'=>'usersearch'));}}
    						<div class="form-body">
    							<h3 class="form-section">User Generator</h3>
                                {{Form::label('numuser', 'Number of users',array('class'=>"h4 col-md-3"))}}
   							    <div class="form-group">
                                    <div class="col-md-8 input-group">
                                        {{Form::text('numuser','5',array('id'=>'numuser','readonly','class'=>'form-control input-lg'))}}
                                         <span class="input-group-addon">
                                             <i class="fa fa-arrow-up btn-info btn" id='userup'></i>
                                             <i class="fa fa-arrow-down btn-info btn" id='userdown'></i>
                                            {{Form::button('More Users', array('class' => 'btn btn-info btn-search','onclick'=>'findUser()'))}}
                                         </span>
                                    </div>
                                    <div class="col-md-3 control-label">
                                        Add a birthdate
                                    </div>
                                    <div class="col-md-8 input-group">
                                        {{Form::checkbox('birthdate', '1', false, array('id'=>'birthdate','onchange'=>'findUser()')) }}
                                    </div>
                                    <div class="col-md-3 control-label">
                                        Add a profile
                                    </div>
                                    <div class="col-md-8 input-group">
                                       {{Form::checkbox('profile', '1', true, array('id'=>'profile','onchange'=>'findUser()')) }}
                                    </div>
                                </div>
                            </div>
                        {{Form::close()}}
                        <!-- end: form and output of users generated -->
                <hr>

                        <!-- start: lorem ipsum information -->
                        <h3>Some information about Lorem Ipsum</h3>

                        <img src="img/lorem-ipsum-banner.jpg" alt="lorem ipsum">

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
                    <div id="usercontainer" style="border: dashed; border-color:#960000; background-color: lightgrey; padding: 15px">Generated results appear here.</div>

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
<script>

// start: handles ajax paragraph search
    function findPara(){
               var restmsg = '/p3?numpara='+document.forms["loremsearch"]["numpara"].value;
               var xmlhttp=new XMLHttpRequest();
               xmlhttp.onreadystatechange=function() {
                   if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                       document.getElementById("usercontainer").innerHTML=xmlhttp.responseText;
                   }
               }
               xmlhttp.open("POST",restmsg,true);
               xmlhttp.send();
    }
// end: ajax for paragraph search

// start: ajax calls to retrieves users
    function findUser(){

    // Build basic rest message with number of users
        var restmsg = '/p3?numuser='+document.forms["usersearch"]["numuser"].value;
        if (document.getElementById("birthdate").checked){
            restmsg = restmsg + '&birthdate=on';
        }
        else {
            restmsg=restmsg+'birthdate=off'
        }
        if (document.getElementById("profile").checked) {
            restmsg = restmsg + '&profile=on';
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
               document.getElementById("usercontainer").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("POST",restmsg,true);
        xmlhttp.send();
    }
// end: ajax script to retrieve users

// start: up arrow for users
i=5;
$(document).ready(function(){
    $("#userup").keypress(function(){
        if (i<99){
            $("#numuser").val(i+=1);
            findUser();
        }
    else {
        document.getElementById("usercontainer").innerHTML="Maximum of 99 users can be created at one time";
    }

    });
    $("#userup").click(function(){
    $("#userup").keypress();
    });
});
// end: up arrow for users

// start: down arrow for users
$(document).ready(function(){
    $("#userdown").keypress(function(){
        if (i>1){
            $("#numuser").val(i-=1);
            findUser();
        }
        else {
            document.getElementById("usercontainer").innerHTML="Minimum of 1 user required";
        }

    });
    $("#userdown").click(function(){
        $("#userdown").keypress();
    });
});
// end: up arrow for users

// start: up arrow for paragraphs
j=3;
$(document).ready(function(){
    $("#paraup").keypress(function(){
        if (j<99){
            $("#numpara").val(j+=1);
            findPara();
        }
        else {
            document.getElementById("usercontainer").innerHTML="Maximum of 99 paragraphs can be created at one time";
        }
      });
    $("#paraup").click(function(){
        $("#paraup").keypress();
    });
});
// end: up arrow for users

// start: down arrow for users
$(document).ready(function(){
    $("#paradown").keypress(function(){
        if (j>1){
            $("#numpara").val(j-=1);
            findPara();
        }
        else {
            document.getElementById("usercontainer").innerHTML="Minimum of 1 paragraph required";
        }
      });
    $("#paradown").click(function(){
        $("#paradown").keypress();
    });
});
// end: up arrow for paragraphs

</script>
@stop
<!-- end: Page Javascript -->