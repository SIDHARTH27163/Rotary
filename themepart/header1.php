  <section id="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8 top-header-links">
                    <ul class="contact_links">
                        <?php
                        include 'admin/dbConfig/dbconfig.php';
                        $query = "SELECT * FROM header_section";
                       $query_run = mysqli_query($connection,$query);
                       $row = mysqli_fetch_assoc($query_run);
                        ?>
                        <li><i class="fa fa-phone"></i><a href="tel: +91<?php echo $row['Phone1'] ?>">+91 <?php echo $row['Phone1'] ?></a></li>
                        <li><i class="fa fa-phone"></i><a href="tel: +91<?php echo $row['Phone2'] ?>"> +91 <?php echo $row['Phone2'] ?></a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></li>  
                                                      
                  

                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 social">
                    <ul class="social_links">
                       
                       <li><a href="https://www.facebook.com/RotaryClubDharamshala/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                       <li><a href="https://www.instagram.com/rotaryclubofdharamshala/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                         <li><a href="http://www.youtube.com/c/RotaryClubofDharamshala"  target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://twitter.com/RotaryClubDsala"  target="_blank"><i class="fa fa-twitter"></i> </a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
        </div>

    </section> 

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
            <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
                     <a class="navbar-brand" href="index">
                        <img src="img/logo.png" width="235px" alt="" class="d-inline-block align-middle mr-2"></a>
                           
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a href="index">Home</a></li>
                                    <li class="nav-item dropdown active"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="true">About Rotary <span class="caret"></span></a>
                                        <ul class="dropdown-menu"aria-labelledby="navbarDropdownMenuLink">
                                                <li class="dropdown-item"><a  href="What_is_rotary">What is Rotary</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="dropdown-item"><a href="Hist">History of Rotary</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="dropdown-item"><a href="Paul_Harris_RF">Paul Harris: Rotary's Founder</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="dropdown-item"><a href="org_structure">Organization Structure</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="dropdown-item"><a href="https://rotarynewsonline.org/current-issue/" target="_blank">Rotary News Online</a>
                                                </li>
                                                <div class="divider"></div>
                                                 <li class="nav-item"><a href="http://rid3070.rotaryindia.org" target="_blank">RI DISTT. 3070</a></li>
<div class="divider"></div>
                            <li><a href="https://www.rotary.org/en" target="_blank">Rotary International</a></li>
                                        </ul>
                             </li>
                             

                            <li class="nav-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Rotary Dharamshala <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                                 <li class="nav-item"><a href="aboutus">About us</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="charter_members">Charter Members</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="dis_tr_ict_gov_ners">District Governor</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="bod">Board of Directors</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="rollofhonor">Roll of Honor</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="Paul_Harris_F">Paul Harris Fellows</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="cmsrid">Club Members Serving in RI Distt. 3070</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="members">Members</a>

                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="loc">List of Contributors</a>
                                                </li>
                                                    <div class="divider"></div>
                                                <li class="nav-item"><a href="pauhsm">Paul Harris Sustaining Members</a>
                                                </li>
                                                <div class="divider"></div>
                                                <li class="nav-item"><a href="ccm">Club Committees</a>
                                                </li>
                                        </ul>
                             </li>
                             

                              <li class="nav-item"><a href="ourcauses">Our causes</a>
                                       
                             </li>
                            <li><a href="mediayear">Media</a></li>
                            
                                                        <li><a href="contact">Contact us</a></li>
                            
                        </ul>
                    </div>

                    
                </div>
            </div>
         </nav>  
                            
    </header>