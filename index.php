<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-fullscreen"></i>Full width</a>
  <?php require_once 'left-nav.php' ?>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Grid Layout</a> </div>
    <h1>Grid Layout (Full width)</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-book"></i> </span>
            
          </div>
          <div class="widget-content">
			<style>
				.xyz{
					/*width:14.25%;
					height:240px;
					list-style-type:none;
					display:block;
					margin-left:20px;
					float:left;
					margin-bottom:15px;*/
					margin-left:0 important;
				}
				.xyz .img-div{
					height:78%;
				}
				.xyz .img-div img{
					height:100%;
					width:100%;
				}
				.xyz .desc{
					width:95%;
					height:20%;
					margin:3px 1px 3px 4px;
					line-height:15px;
				}
			</style>
			<ul style="overflow:hidden" class="thumbnail">
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
				<li class="span3 xyz">
					<div class="img-div">
						<img src="img/gallery/imgbox3.jpg" alt="">
					</div>
					<div class="desc">Mrs. Sherlock Holmes: The True Story of New York City's Greatest Female Detective and the 1917 Missing Girl Case That Captivated a Nation</div>
				</li>
			</ul>
		  </div>
		  <div class="pagination" style="text-align:center">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
		 </div>
        </div>
      </div>
    </div></div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
<script src="js/jquery.dotdotdot.js"></script>
<script>
$(function(){
	$(".desc").dotdotdot();
})
</script>
</body>
</html>
