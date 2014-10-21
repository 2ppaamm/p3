@extends('_master')

@section('page_title')
    xkcd Password
@stop

@section ('page_js')
    <script>
        function findPwd() {
            var restmsg = "logic.php?numword="+document.forms["search"]["numword"].value+"&case="+
            document.forms["search"]["case"].value;
            if (document.getElementById("symbol").checked){
                restmsg = restmsg + '&symbol=on';
            }
            if (document.getElementById("num").checked) {
                restmsg = restmsg + '&num=on';
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    document.getElementById("demo").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET",restmsg,true);
            xmlhttp.send();
        }
    </script>
@stop

@section ('header')

<!-- begin:header -->
<section id="header" class="heading" style="background: url(http://imgs.xkcd.com/comics/password_strength.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title-desc">
                    <h2>Project 2</h2>
                    <p>xkcd Password Generator</p>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- end:header -->
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
                    <h2><a href="http://p2.pamelalim.org">xkcd Password Generator</a></h2>
                </div>
                <div class="post-meta">
                    <span><em>By <a href="http://p1.pamelalim.org">Pamela Lim</a></em></span>
                    <span><em>On September 30, 2014</em></span>
                    <span><em>In <a href="http://dwa15.com">DWA</a></em></span>
                </div>

                <p>I very seldom have problems with passwords, so I did not even realize there is such a thing called
                    the xkcd password generator, and such a creative way to generate passwords.
                </p>
                <p>Here's  a simple version from me. You can choose between 3-8 words, in Camel or snake cases. Then,
                you can choose to add a symbol and a number.</p>
                <p>The rationale for such a password is as documented in the cartoon below.</p>
                <p>I've seeked o maximize the performance of this password search, and downloaded a local database in the same server.
                Included Ajax for the search to minimize data transfer. You can see the time the page is loaded, and that does
                not reload with every new search. This saves hosting costs for me.</p>
                <p><img src="http://imgs.xkcd.com/comics/password_strength.png"></p>
            </div>
        </div>
        </div>

    <hr>

        <!-- begin:sidebar -->
        <div class="col-md-4 col-sm-4 sidebar">
            <p>Time page loaded:  <?php echo date('m/d/Y h:i:s a', time()); ?>
            </p>
            <h3>Search for password</h3>
            <div class="widget-sidebar">

                <form id="search" class="navbar-form search" method="GET" role="search" action = "http://localhost:83/logic.php">


                    <div class="row">
                        <label class="col-md-6 control-label">No. of words</label>
                        <div class="col-md-6">
                            <select class="form-control" name="numword">
                                <option value="3">3</option>
                                <option value="4" selected>4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-6">Choose a case</label>
                        <div class="col-md-6">
                            <select class="form-control col-md-2" name="case">
                                <option value="snake" selected>Snake</option>
                                <option value="camel">Camel</option>
                                <option value="space">Space</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="control-label col-md-6">Other Options</label>
                        <div class="col-md-6">
                            <input type='checkbox' id="symbol" value='symbol' name="symoption" unchecked>Add a symbol<br>
                            <input type='checkbox' id="num" value='num' name="numoption" unchecked>Add a number<br>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="control-label col-md-5">
                    </div>
                    <button type="button" onmouseup="findPwd()">Search</button>
                </form>
            <h3>Password Suggestion:</h3>
            <p><span id="demo">Your password suggestion appears here.</span></p>
        </div>


    <!-- end:sidebar -->
    </div>
</div>
</section>
<!-- end:content -->
@stop