	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png">
		            
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            <li>
		                <a href="#"><span class="title">Нүүр</span></a>
		                <!-- Level Two-->
		                
		            </li>
		            <li>
						
							
							
					
		                <a href="#"><span class="title">Хичээлүүд</span></a>
		                <!-- Level Two-->
	            
		            </li>
		            
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Холбоо барих</span></a>
		            </li>
		        </ul>
		        <ul class="sign_up_btn pull-right dn-smd mt20">
	                <li class="list-inline-item list_s">
                        <a href="#" class="btn flaticon-user" data-toggle="modal" data-target="#exampleModalCenter">
                             <span class="dn-lg">Нэвтрэх/Бүртгүүлэх</span>
                            </a>
                        </li>
	                


						
	                <li class="list-inline-item list_s">
	                	<div class="search_overlay">
						 	<a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
						    	<span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
						 	</a>
						</div>
	                </li>
	            </ul><!-- Button trigger modal -->
		    </nav>
		</div>
	</header>
	<!-- Modal -->
	<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
	    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Нэвтрэх</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Бүртгүүлэх</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form action="#">
								<div class="heading">
									<h3 class="text-center">Нэвтрэх</h3>
									
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="И-майл хаяг">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Нууц үг">
								</div>
								<div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck1">
									<label class="custom-control-label" for="exampleCheck1">Намайг сана</label>
							
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm2">Нэвтрэх</button>
								<hr>
								
							</form>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Шинэ хаяг үүсгэх</h3>
							</div>
							<form action="#">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Нэвтрэх нэр">
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="И-майл хаяг">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Нууц үг">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Нууц үг баталгаажуулах">
								</div>
								
								<button type="submit" class="btn btn-log btn-block btn-thm2">Бүртгүүлэх</button>
								<hr>
								
							</form>
						</div>
				  	</div>
				</div>
	    	</div>
	  	</div>
	</div>
	<!-- Modal Search Button Bacground Overlay -->
    <div class="search_overlay dn-992">
		<div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
		    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
		    <div id="mk-fullscreen-search-wrapper">
		      <form method="get" id="mk-fullscreen-searchform">
		        <input type="text" value="" placeholder="Хичээл хайх..." id="mk-fullscreen-search-input">
		        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
		      </form>
		    </div>
		</div>
	</div>
<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
              
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item">
                    <div class="search_overlay">
                      <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                        <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                      </a>
                        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                            <div id="mk-fullscreen-search-wrapper2">
                              <form method="get" id="mk-fullscreen-searchform2">
                                <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
                                <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                              </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            
            <li><a href="page.html">Нүүр</a></li>
              
            </li>
            <li><span>Хичээлүүд</span>
               
            </li>
           
            
            <li><a href="page-contact.html">Холбоо барих</a></li>
            <li><a href="page-login.html">Нэвтрэх</a></li>
            <li><a href="page-register.html">Бүртгүүлэх</a></li>
        </ul>
    </nav>
</div>
