            <style>
                            .oculto {
                                    visibility: hidden;
                                    position: absolute;
                                }
                            .clr a div.fa {color:#03CC85;}
                            span.clr { color:#03CC85;font-size: 18px;padding:5px; font-weight: ;}
                        </style>
                           <script>
                                function abrir(variable) {
                                   var z = 'sub'+variable;
                                   
                                   var x = document.getElementsByClassName(z);
                                   var i;
                                    for (i = 0; i < x.length; i++) {
                                        if(x[i].style.visibility == "visible"){
                                        x[i].style.visibility = "hidden";
                                        x[i].style.position = "absolute";
                                        }else {
                                            x[i].style.visibility = "visible";
                                            x[i].style.position = "static";
                                        }

                                    }
                                }
                            </script>
            <a href="#sidebar" class="mobilemenu"><i class="fa fa-reorder"></i></a>
            <div id="sidebar">
                <div id="main-nav">
                    <div id="nav-container">
                        <div id="profile" class="clearfix">
                            <div class="portrate hidden-xs"></div>
                            <div class="title">
                                <h2>Hommage</h2>
                                <h3>Hansen-Bahia</h3>
                            </div>
                            
                        </div>
                        
                        
                        <ul id="navigation">
                            <li>
                              <a href="#menu-1">
                                <div class="fa fa-home"></div>
                                <div class="text">1-Home</div>
                              </a>
                            </li>
                            <li>
                              <a href="#menu-2">
                                <div class="fa fa-book"></div>
                                <div class="text">2-Inhaltsverzeichnis</div>
                              </a>
                            </li>
                            <li>
                              <a href="#" onclick="abrir('master1');">
                                <div class="fa fa-street-view"></div>
                                <div class="text">Über Hansen Bahia <span class="clr">&raquo;</span> </div>
                              </a>
                            </li>
                            <li class="oculto submaster1 clr">
                              <a href="#menu-17">
                                <div class="fa fa-asterisk"></div>
                                <div class="text">17-Autobiographie</div>
                              </a>
                            </li>
                            <li class="oculto submaster1 clr">
                              <a href="#menu-6">
                                <div class="fa fa-paint-brush"></div>
                                <div class="text">6-Ausstellungen</div>
                              </a>
                            </li>
                            <li class="oculto submaster1 clr">
                              <a href="#menu-12">
                                <div class="fa fa-asterisk"></div>
                                <div class="text">16-Essay und Werk</div>
                              </a>
                            </li>
                            <li class="oculto submaster1 clr">
                              <a href="#menu-8">
                                <div class="fa fa-asterisk"></div>
                                <div class="text">8-Noah + Odysseus</div>
                              </a>
                            </li>
                            <li class="oculto submaster1 clr">
                              <a href="#menu-5">
                                <div class="fa fa-asterisk"></div>
                                <div class="text">5-Biographie</div>
                              </a>
                            </li>
                            <li class="oculto submaster1 clr">
                              <a href="#menu-7">
                                <div class="fa fa-asterisk"></div>
                                <div class="text">7-Bibliographie</div>
                              </a>
                            </li>                                                   
                            <li>
                              <a href="#" onclick="abrir('master2');">
                                <div class="fa fa-picture-o"></div>
                                <div class="text">Abbildungen + Photos  <span class="clr">&raquo;</span> </div>
                              </a>
                            </li>
                            <li class="oculto submaster2 clr">
                              <a href="#menu-3">
                                <div class="fa fa-picture-o"></div>
                                <div class="text">3-Abbildungen</div>
                              </a>
                            </li>                            
                            <li class="oculto submaster2 clr">
                              <a href="#menu-4">
                                <div class="fa fa-camera"></div>
                                <div class="text">4-Photos</div>
                              </a>
                            </li>
                            <li class="oculto submaster2 clr">
                              <a href="#menu-15">
                                <div class="fa fa-paper-plane"></div>
                                <div class="text">15-Katalog 1946 -1970</div>
                              </a>
                            </li>
                            <li>
                              <a href="#" onclick="abrir('master3');">
                                <div class="fa fa-bank"></div>
                                <div class="text">Museum + Stiftung  <span class="clr">&raquo;</span> </div>
                              </a>
                            </li>
                            <li class="oculto submaster3 clr">
                              <a href="#menu-11">
                                <div class="fa fa-bank"></div>
                                <div class="text">11-Stiftung</div>
                              </a>
                            </li>
                            <li class="oculto submaster3 clr">
                              <a href="#menu-13">
                                <div class="fa fa-bank"></div>
                                <div class="text">13-Museum in Cachoeira</div>
                              </a>
                            </li>
                            <!--
                            <li>
                              <a href="#menu-5">
                                <div class="fa fa-bookmark"></div>
                                <div class="text">5-Biographie</div>
                              </a>
                            </li>
                            -->
                            <!--
                            <li>
                              <a href="#menu-6">
                                <div class="fa fa-paint-brush"></div>
                                <div class="text">6-Ausstellungen</div>
                              </a>
                            </li>
                            -->
                            <!--
                            <li>
                              <a href="#menu-7">
                                <div class="fa fa-file-text"></div>
                                <div class="text">7-Bibliographie</div>
                              </a>
                            </li> 
                            -->
                            <!--
                            <li>
                              <a href="#menu-8">
                                <div class="fa fa-asterisk"></div>
                                <div class="text">8-Noah + Odysseus</div>
                              </a>
                            </li> 
                            -->
                            <li>
                              <a href="#menu-9">
                                <div class="fa fa-briefcase"></div>
                                <div class="text">9-Arbeitstechnik</div>
                              </a>
                            </li>
                            
                            
                            <!-- 
                            <li>
                              <a href="#menu-11">
                                <div class="fa fa-bank"></div>
                                <div class="text">11-Stiftung</div>
                              </a>
                            </li>
                            -->
                            <li>
                              <a href="#menu-12">
                                <div class="fa fa-book"></div>
                                <div class="text">12-Mein erstes Buch</div>
                              </a>
                            </li>
                            <!--
                            <li>
                              <a href="#menu-13">
                                <div class="fa fa-bank"></div>
                                <div class="text">13-Museum in Cachoeira</div>
                              </a>
                            </li>
                            -->
                            <li>
                              <a href="#menu-14">
                                <div class="fa fa-newspaper-o"></div>
                                <div class="text">14-Presse</div>
                              </a>
                            </li>
                            <li>
                              <a href="#menu-10">
                                <div class="fa fa-envelope"></div>
                                <div class="text">10-Kontakt</div>
                              </a>
                            </li>
                            <!--
                            <li>
                              <a href="#menu-15">
                                <div class="fa fa-paper-plane"></div>
                                <div class="text">15-Katalog 1946 -1970</div>
                              </a>
                            </li>
                            -->
                            <!--
                            <li>
                              <a href="#menu-16">
                                <div class="fa fa-pencil"></div>
                                <div class="text">16-Essay und Werk</div>
                              </a>
                            </li>
                            -->
                            <!--
                            <li>
                              <a href="#menu-17">
                                <div class="fa fa-street-view"></div>
                                <div class="text">17-Autobiographie</div>
                              </a>
                            </li>                                                 
                            -->
                            <!--
                            <li>
                              <a href="#research">
                                <div class="fa fa-book"></div>
                                <div class="text">Research</div>
                              </a>
                            </li> 
                            
                            <li>
                              <a href="#publications">
                                <div class="fa fa-edit"></div>
                                <div class="text">Publications</div>
                              </a>
                            </li> 

                            <li>
                              <a href="#teaching">
                                <div class="fa fa-clock-o"></div>
                                <div class="text">Teaching</div>
                              </a>
                            </li>
                            

                            

                            <li>
                              <a href="#contact">
                                  <div class="fa fa-calendar"></div>
                                  <div class="text">Contact & Meet Me</div>
                              </a>
                            </li>

                            <li class="external">
                              <a href="#">
                                  <div class="fa fa-download"></div>
                                  <div class="text">Download CV</div>
                              </a>
                            </li>
                            -->
                        </ul>
                    </div>        
                </div>
                
                <div class="social-fas">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>    
            </div>