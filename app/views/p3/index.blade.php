@extends('_master')

@section('page_title')
     Developer's best friend
@stop

@section('header')
<!-- start: provide a header for the page -->
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
<!-- end: header -->
@stop

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
                            <p>Anglicus ! Quis necesse esse ? Im 'non iens ad Angliam. ~</p>
                            <small>"English! Who needs that? I'm never going to England ~ Homer Simpson"</small>
                        </blockquote>


 <!-- start: form for random text generator -->
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
                                            'max' => '99',
                                            'pattern'=>'[0-9.]+'
                                        ))}}
								<span class="input-group-addon">
                                    {{ Form::submit('Generate', array(
                                        'class'=>'btn btn-info btn-search',
                                        'id' => 'genpara'
                                    )) }}
								</span>
								</div>
                                <div class="col-md-4 control-label">
                                   Add paragraph tags
                                </div>
                                <div class="col-md-4 input-group">
                                    {{ Form::checkbox('tags','off',true, array(
                                       'id'=>'tags'
                                    ))}}
                                </div>
                            </div>
                        {{Form::close()}}
<!-- end: form for paragraph generator -->

                        <hr>

<!-- start: form for users generator -->
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
                                            'max' => '99',
                                            'pattern'=>'[0-9.]+'
                                         ))}}
                                        <span class="input-group-addon">
                                            {{ Form::button('Generate', array(
                                                'class'=>'btn btn-info btn-search',
                                                'id' => 'genuser',
                                                'type' => 'submit'
                                            )) }}
                                        </span>
                                    </div>
                                    <div class="col-md-4 control-label">
                                        Add a birthdate
                                    </div>
                                    <div class="col-md-4 input-group">
                                        {{ Form::checkbox('birthdate','on',false, array(
                                            'id'=>'birthy'
                                        ))}}
                                    </div>
                                    <div class="col-md-4 control-label">
                                        Add a profile
                                    </div>
                                    <div class="col-md-4 input-group">
                                       {{Form::checkbox('profile','on', false, array(
                                        'id'=>'profilecheck'
                                        )) }}
                                    </div>
                                </div>
                            </div>
                        {{Form::close()}}
<!-- end: form for users generator -->
                <hr>

<!-- start: some information on Lorem ipsum -->
                        <h3>Some information about Lorem Ipsum</h3>

                        <img src="http://i.imgur.com/DAheL.gif" alt="lorem ipsum">

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <!-- end: lorem ipsum information -->
                    </div>
                </div>

                <hr>
                <!-- begin:comments -->
                <!-- end:post-comment -->
            </div>
<!-- end: Lorem Ipsum information -->

<!-- begin: sidebar for the output -->
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


@section('page_js')
@include('p3.indexjs')
@stop

@section('page_privacy')
<!-- start: privacy related to page -->
    <div id="simpsons">
        <h3>Simpsons</h3>
        <p>"The Simpsons" TM and (C) (or copyright) Fox and its related companies. All rights reserved. Any reproduction, duplication, or distribution in any form is expressly prohibited.</p>
        <p>This web site, its operators, and any content contained on this site relating to "The Simpsons" are not authorized by Fox.</p>
    </div>
<!-- end: page privacy -->
@stop