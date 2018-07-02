<html>

<div id="wrapper">
  <header>

    <div class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><img src="img/integrasys.png" alt="logo" style="height:42px; width:155px"/></a>
        </div>
        <div class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
            <li><a href="{!! url('/'); !!}">Home</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Corporate <span class="caret"></span></a>
              <ul class="dropdown-menu">

                <li><a href="{!! url('/CompanyProfile'); !!}">Company Profile</a></li>

              </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{!! url('/Solution'); !!}">Solution</a></li>
                <li><a href="{!! url('/PastProject'); !!}">Past Project</a></li>
              </ul>
            </li>
            <li><a href="{!! url('/Career'); !!}">Career</a></li>
            <li><a href="{!!url('/Contact'); !!}">Contact</a></li>

          </ul>
        </div>
      </div>
    </div>

  </header>



</div>
</html>
