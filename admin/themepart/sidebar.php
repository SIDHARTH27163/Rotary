
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/title.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h6 style="color:#f23167"><?php echo $_SESSION['username']?></h6>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="admin_in_fo.php" class="nav-link">
              <i class="fa fa-user nav-icon" aria-hidden="true"></i>
              <p>
                Administrartor Info
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="mem_in_fo.php" class="nav-link">
              <i class="fa fa-user nav-icon" aria-hidden="true"></i>
              <p>
                Member Info
              </p>
            </a>
          </li>
          <li class="nav-header">UPDATION SECTION</li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Above Footer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-star nav-icon" aria-hidden="true"></i>
              <p>
                Designated Members
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="designated_members_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                  <p>Add & Select</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_designated.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>View DM List</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-star nav-icon" aria-hidden="true"></i>
              <p>
                Nation Builder Award
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nba_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                  <p>Add & Select</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="view_nba.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>View DM List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="viewdist.php" class="nav-link">
              <i class="fas fa-award nav-icon"></i>
                Ditrict Awards
              </p>
            </a>
          </li>
      

 <li class="nav-item has-treeview">
            <a href="viewhm.php" class="nav-link">
              <i class="fas fa-award nav-icon"></i>
                Honrary Members
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manage Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                    Album
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="gallery_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Album
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewsession.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Album
                  </p></a>
                </li>
              </ul>
              </li>


            </ul>
            
            
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera"></i>
                   <p>
                    Gallery
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="viewsessiong.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Gallery
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewssession.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Gallery
                  </p></a>
                </li>
              </ul>
              </li>

              
            </ul>
          </li>
          
          <!--New Area Added-->
                  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manage AVS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                    AVS
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="avs_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add AVS
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewavs.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View AVS
                  </p></a>
                </li>
              </ul>
              </li>


            </ul>
          </li>
                      <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manage SVA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                    Service Awards
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="dsa_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add SVA
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewdsa.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View SVA
                  </p></a>
                </li>
              </ul>
              </li>


            </ul>
          </li>
          <!--New Area Closed-->
           <li class="nav-item has-treeview">
            <a href="viewoig.php" class="nav-link">
              <i class='fas fa-coins nav-icon'></i>
                Old Is Gold
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-rupee-sign nav-icon"></i>
              <p>
                Matching Grants
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
            <a href="viewgrants.php" class="nav-link">
              <i class="fas fa-rupee-sign nav-icon"></i>
              <p>
               Grants
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="viewgrantsf.php" class="nav-link">
              <i class="fas fa-rupee-sign nav-icon"></i>
              <p>
                Grants Footer
              </p>
            </a>
          </li> 

            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manage Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                    Projects
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="projectsyear.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Projects
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewprojects.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Projects
                  </p></a>
                </li>
                 <li class="nav-item">
                <a href="viewmonth.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Months
                  </p></a>
                </li>
              </ul>
              </li>
            </ul>

          </li>
         
          <li class="nav-item has-treeview">
            <a href="viewnewsletter.php" class="nav-link">
              <i class="fa fa-newspaper nav-icon"></i>
              <p>
                News Letters
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="secretary_report.php" class="nav-link">
              <i class="fa fa-newspaper nav-icon"></i>
              <p>
                Secretary Report
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="Rotary_citation.php" class="nav-link">
              <i class="fas fa-medal nav-icon"></i>
              <p>
                Rotary Citation
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="banner_session.php" class="nav-link">
              <i class="fas fa-flag nav-icon"></i>
              <p>
                Rotary Event Banners
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="rotarypins.php" class="nav-link">
              <i class="fas fa-award nav-icon"></i>
                Rotary Pins
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="videos.php" class="nav-link">
              <i class="fa fa-video nav-icon"></i>
                Videos
              </p>
            </a>
          </li>
          

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Home Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="header.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Header</p>
                </a>
              </li>
              <li class="nav-item">
            <a href="view_notice_board.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Notice Board
              </p>
            </a>
          </li>
              <li class="nav-item">
                <a href="slider.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="addthemeoftheyear.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Theme of the Year</p>
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="viewmediasession.php" class="nav-link">
              <i class="fa fa-video nav-icon" aria-hidden="true"></i>
              <p>
                Media
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-hand-holding-heart nav-icon"></i>
              <p>
                Our Causes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="ourcauses.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Causes List
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="view_oc.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Causes List
                  </p></a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="addourcauses.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Causes Data 
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="view_ocd.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Causes Data
                  </p></a>
                </li>
              </ul>
            </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Rotary Dharamshala
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Board Of Directors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Board_of_Directors.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                  <p>Add & Select</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewbod.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>View BOD List</p>
                </a>
              </li>
            </ul>
          </li>
              
           <li class="nav-item has-treeview">
            <a href="viewcm.php" class="nav-link">
              <i class="fab fa-accusoft nav-icon"></i>
              <p>
                Charter Members
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-briefcase nav-icon"></i>
              <p>
                CMS RID 3070
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="cmsrid.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                  <p>Add & Select</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewcmsrid.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>View D-G List</p>
                </a>
              </li>
                
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-hand-holding-heart nav-icon"></i>
              <p>
                Club Commetties
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="cmty.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Commettie
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewcmtylist.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Commettie List
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewcmtymem.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Commt. Members
                  </p></a>
                </li>
              </ul>
              
            </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i>
              <p>
                District Governers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="district_gov.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                  <p>Add & Select</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewdg.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>View D-G List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-briefcase nav-icon"></i>
              <p>
                List Of Contributors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="loc_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                  <p>Add & Select</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="loc_view.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                  <p>View Contributors List</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
            <a href="viewmembers.php" class="nav-link">
              <i class="fa fa-users nav-icon" aria-hidden="true"></i>
              <p>
                Members
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview">
            <a href="viewphf.php" class="nav-link">
              <i class="fas fa-pray nav-icon"></i>
              <p>
                Paul Harris Fellows
              </p>
            </a>
          </li>
              <li class="nav-item has-treeview">
            <a href="upcoming_events.php" class="nav-link">
              <i class="fas fa-pray nav-icon"></i>
              <p>
               Upcoming Events
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="phsm.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                PH Sust Members
              </p>
            </a>
          </li>
              <li class="nav-item has-treeview">
            <a href="viewrh.php" class="nav-link">
              <i class="fas fa-trophy nav-icon"></i>
              <p>
                Roll Of Honor
              </p>
            </a>
          </li>
</ul>

            </li>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera"></i>
                   <p>
                    Event
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="addevent.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Event
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewevent.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Event
                  </p></a>
                </li>
              </ul>
              </li>

              
            </ul>
          </li> 
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Interact Club
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                    Interact Team Members
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="icclub_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Year /Session
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="view_icteam.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Team Members
                  </p></a>
                </li>
            
              </ul>
              </li>

              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Interact Events 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                   I Event cover
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="isession.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Cover
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="ieventsession.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Cover
                  </p></a>
                </li>
              </ul>
              </li>


            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera"></i>
                   <p>
                   I Events
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="ieventcsession.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add I Event
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="viewisession.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View I Event
                  </p></a>
                </li>
              </ul>
              </li>

              
            </ul>
          </li>

            </ul>

          </li> 

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Rotract Club
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                 <li class="nav-item">
                <a href="addrc.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                   Add Rotract Club
                  </p></a>
                </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                    Rotract Team Members
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="rcclub_session.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Year /Session
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="view_rcteam.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Team Members
                  </p></a>
                </li>
            
              </ul>
              </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Manage Rotaract Projects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                    Rotaract Projects
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="rotractprojectsyear.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Projects
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="rotractviewprojects.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Projects
                  </p></a>
                </li>
                 <li class="nav-item">
                <a href="rotractviewmonth.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Months
                  </p></a>
                </li>
              </ul>
              </li>
            </ul>

          </li>
          </ul>
          </li>
          

<!-- end of new code added for rotaract club-->









   
         
          <hr>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
              <i class=" nav-icon fa fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
          
           <!-- making comment for Rotaract Events -->
  <!--
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
             
             
            
               Rotract Events 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera-retro"></i>
                   <p>
                   R Event cover
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="reventsession.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add Cover
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="vreventsession.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View Cover
                  </p></a>
                </li>
              </ul>
              </li>


            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-camera"></i>
                   <p>
                   R Events
                  </p>
                  <i class="fas fa-angle-left right"></i>
                </a> 
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="vreventsession1.php" class="nav-link">
                  <i class="fa fa-plus-circle"></i>
                   <p>
                    Add R Event
                  </p></a>
                </li>
                <li class="nav-item">
                <a href="vreventsession2.php" class="nav-link">
                  <i class="fa fa-eye"></i>
                   <p>
                   View R Event
                  </p></a>
                </li>
              </ul>
              </li>

              
            </ul>
          </li>

            </ul>

          </li>       
end of rotaract event          -->
<!-- New code for rotaract club-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Logout Modal -->

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logout">Logout</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session. </div>
      <div class= "modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <form action="logout.php" method="POST" >
          <button class="btn btn-danger" type="submit" name="lgout_btn"><i class=" nav-icon fa fa-power-off"></i>Logout</button>
        </form>
    </div>
  </div> 
</div>
</div>

