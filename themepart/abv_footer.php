<section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Address</h4>
                        <hr/>
                        <?php
                        $query = "Select * From header_section";
                        $query_run = mysqli_query($connection,$query);
                        $row= mysqli_fetch_assoc($query_run)
                        ?>
                        <p>
                            <?php echo $row['address'];?>
                        </p>
                        <h4>Meeting Hours</h4>
                        <p><?php echo $row['meeting'];?></p>
                        <br>

                        
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Useful Links</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="designated_members">Designated Members</a></li>
                            <li><a href="hnrmembers">Honorary Members</a></li>
                            
                            <li><a href="g@llery">Gallery</a></li>
                            <li><a href="oig">Gallery Old is Gold</a></li>
                            
                            <li><a href="matching_grants">Matching Grants</a></li>
                            <li><a href="newsletters">News Letters</a></li>
                             <li><a href="videos">Videos</a></li>
                              <li><a href="rthemes" target="_blank">Rotary Themes</a></li>
                            
                           
                            
                        </ul>
                         <br>
                        <h5><a href="rcclub">Rotaract Club</a></h5>
                      <hr/>
                      <h5><a href="icclub">Interact Club</a></h5>
                      <hr/>
                    </div>
                </div>
      
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                           <h4>Rotary Show Case</h4>
                           <hr/>
                        <ul class="footer-links">
                            <li><a href="https://rotaryteach.org/" target="_blank">Rotary India Literacy Mission</a></li>  
                            <li><a href="projects">Projects / Events</a></li>
                            <li><a href="secretary_report">Secretary Report</a></li>
                         <li><a href="rb@nners">Rotary Event Banners</a></li>
                            <li><a href="wwarp">Why Wear A Rotary Pin</a></li>
                              <li><a href="desigmonth">Designated Months in Rotary</a></li>
                             <li><a href="4_way_test">The Four Way Test</a></li>
                           
                           
                           <h4>Rotary Awards</h4>
                           <hr/>
                           <li><a href="rcdrc">Rotary Citation/Awards</a></li>
                            <li><a href="distserviceaward">District Service Award</a></li>
                             <li><a href="avenuesofservice">Avenues of Service Award</a></li>
                           
                            <li><a href="nba">Nation Builder Award</a></li>
                             
                            <!--<li><a href="disttawr">Distt. Awards</a></li>-->
                           
                            </ul>
                            <br>
                           </div>
                      
                  
                </div>


                <div class="col-md-3 col-sm-3 col-xs-12 <block></block>">
                    
                       <div class="footer-block">
                        <h4>Community</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="https://www.facebook.com/RotaryClubDharamshala/" target="_blank"><i class="fa fa-facebook"></i>    &nbsp; &nbsp;Facebook</a></li>
                        <li><a href="https://www.google.com/url?sa=t&source=web&rct=j&url=https://m.youtube.com/channel/UCNM16zogE3O3-a2ipyf1PhQ&ved=2ahUKEwi7uOC09b_oAhW3zjgGHY0KCbgQjjgwAHoECAMQAQ&usg=AOvVaw2Vt91qGcIU5sDU4DtXxQWC" target="_blank"><i class="fa fa-youtube"></i>&nbsp; &nbsp;Youtube</a></li>
                        <li><a href="https://twitter.com/RotaryClubDsala" target="_blank"><i class="fa fa-twitter"></i>    &nbsp; &nbsp;Twitter</a></li>
                         <li><a href="https://www.instagram.com/rotaryclubofdharamshala/" target="_blank"><i class="fa fa-instagram"></i>    &nbsp; &nbsp;Instagram</a></li>
                        </ul>

                           
                    </div>
                    <div class="footer-block">
                        
                        <!--
                        <h4>Visitors</h4>
                        <hr/>
                        
                        <ul class="footer-links">
                            <li>Visitors :
                        -->        
                             <!-- Start of WebFreeCounter Code -->
<!-- <img src="https://www.webfreecounter.com/hit?id=gumufxdko&nd=9&style=122" border="0" alt="free counter"></a>  -->
<!-- End of WebFreeCounter Code -->
<!-- End of WebFreeCounter Code -->
                                  </li>

                        </ul>
                        

                    </div>
                    <div class="footer-block">
                        <h4>Scan To Follow us</h4>
                        <hr/>
                        
                        <ul class="footer-links">
                            <li>QR-Codes :
                                
                                <a href="img/facebook.png" target="_blank">
                                <img src="img/facebook.png" title="Facebook" Alt="facebook" height="30" width="30"   border="0" ></a>
                                <a href="img/youtube.png" target="_blank">
                                <img src="img/youtube.png" title="Youtube" Alt="Youtube" height="30" width="30"   border="0" ></a>
                                <a href="img/twitter.png" target="_blank">
                                <img src="img/twitter.png" title="Twitter" Alt="Twitter" height="30" width="30"   border="0" ></a>
                                <a href="img/instagram.png" target="_blank">
                                <img src="img/instagram.png" title="Instagram" Alt="Instagram" height="30" width="30"   border="0" ></a>
                                 
                                  </li>

                        </ul>
                        

                    </div>
                    
                    <div class="footer-block">
                        <a href="member_login" target="_blank"><h6>Member Login</h6></a>
                        <hr/>
                    </div>
                    
                    <div class="footer-block">
                        <a href="admin/" target="_blank"><h6>Office Bearer Login</h6></a>
                        <hr/>
                    </div>
                     
                    
                </div>
            </div>
        </div>


    </section>