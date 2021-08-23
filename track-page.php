<?php

	require_once("session.php");
	
	require_once("class.user.php");
	$auth_user = new USER();
	
	
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM track WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track details - <?php echo $userRow['track_number']; ?></title>
    <link href="./track-page_files/css" rel="stylesheet">
    <link href="./track-page_files/style.css" rel="stylesheet" type="text/css"> 
    <!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
</head>
<body>
    <header>
    <nav>
                    <div class="brand">
                    <img src="./track-page_files/logo.png" alt="fels" class="logo-img">
                        <div class="brand-hamburger">
                            <aside class="hamburger"></aside>
                            <aside class="hamburger"></aside>
                            <aside class="hamburger"></aside>
                        </div>
                       
                    </div>
                    <div class="nav-link">
                        <a href="logout.php?logout=true" class="nav-item">Home</a>
                        <div class="member-dashboard">Welcome <?php echo $userRow['receiver']; ?><b></b>, View Your details below!<br>
                Click to <a href="logout.php?logout=true" class="nav-item">Logout</a>
                        
                        
                        <div id="google_translate_element"></div>
	                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'zh'}, 'google_translate_element');
}
</script>
	                       
                    </div>
                </nav>
    </header>
    <main>
            <div class="shipment-wrapper">
                <div class="shipment-left" style="color:black;">
                        <div class="left-sub-wrapper">
                                <img src="./track-page_files/postman.png" alt="" class="section-image1">
                                <h3 class="left-heading">
                                detail 
                                    </h3>
                            </div>
                    
                    
                    
                    <section class="card">
                        <h3 class="activity-heading">
                        Type Of Goods Shipped 
                        </h3>
                        <p class="activity-paragraph">
                        <?php echo $userRow['shipment_type']; ?>                        </p>
                    </section>
                    <section class="weight-section style=" border:1px="" solid="" red;"="">
                        <div class="card">
                            <h3 class="activity-heading">
                            Weight 
                            </h3>
                            <p class="activity-paragraph">
                            <?php echo $userRow['item_weight']; ?>    
                            </p>
                            <p class="activity-paragraph">
                            lb 
                            </p>
                        </div>
                        <div class="card">
                            <h3 class="activity-heading">
                            Service 
                            </h3>
                            <p class="activity-paragraph">
                            <?php echo $userRow['service_used']; ?>
                            </p>
                        </div>
                        <div class="card">
                             <h3 class="activity-heading">
                             Number Of Items
                            </h3>
                            <p class="activity-paragraph">
                            <?php echo $userRow['number_of_items']; ?>  
                            </p>
                        </div>

                    </section>
                    <section class="destination-section">
                        <div class="card destination card-sep">
                            <h3 class="activity-heading">
                            Sender
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['sender']; ?>   
                            </p>
                            <hr>
                            <h3 class="activity-heading">
                            Origin
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['origin']; ?>  
                            </p>
                             <hr>
                            <h3 class="activity-heading">
                                    Phone
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['sender_phone']; ?>  
                            </p>
                            <hr>
                            <h3 class="activity-heading">
                                   E-Mail
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                                   *********   
                            </p>
                            <hr>
                            <h3 class="activity-heading">
                                    Origin
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['origin']; ?>  
                            </p>
                        </div>

                        <div class="card">
                        <h3 class="activity-heading">
                        Receiver
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['receiver']; ?>  
                            </p>
                            <hr>
                            <h3 class="activity-heading">
                            Destination
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['destination']; ?>   
                            </p>
                              <hr>
                            <h3 class="activity-heading">
                                    Phone
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['receiver_phone']; ?>  
                            </p>
                            <hr>
                            <h3 class="activity-heading">
                                    E-Mail

                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['email']; ?>
                            </p>
                            <hr>
                            <h3 class="activity-heading">
                                    Address
                            </h3>
                            <p class="activity-paragraph" style="text-transform:capitalize;">
                            <?php echo $userRow['receiver_address']; ?>  
                            </p>
                        </div>
                    </section>
                    <section>
                        <div class="card" style="min-height: 130px;">
                            <h3 class="activity-heading">
                            Description
                            </h3>
                            <p class="activity-paragraph">
                            <?php echo $userRow['description']; ?>
                            </p>
                        </div>
                    </section>
                </div>

<!-- SHIPMENT STARTS HERE -->
                <div class="shipment-right">
                    <h4 class="title">Shipment Summary</h4>
                    <img src="./track-page_files/world.png" class="world">
                    <div>
                        <h3 class="label small tracking-number">Tracking number:
                             <span class="title"><?php echo $userRow['track_number']; ?>  </span></h3>
                              <div style="color:red;margin:auto;text-align:center;padding:10px 0px;font-weight:bold;">
                                 Note: <?php echo $userRow['activity']; ?>
                                 </div>                        <div class="transit-wrapper" style="color:black;">
                                                            <div class="transit-sections">
                                        
                                         <div class="transit-ball transball-active "> 
                                            <img src="./track-page_files/processing.png" class="ball-content">                                            
                                        </div> 
                                        <div class="transit-ball transball-active">
                                             <img src="./track-page_files/intransit.png" class="ball-content">                                        </div>  
                                        <div class="transit-ball ">
                                                                                     </div>                          
                                </div>
                                <div class="transit-label-section">
                                    <div class="transit-label transit-active ">
                                    <?php echo $userRow['service_used']; ?> 
                                    </div>
                                    <div class="transit-label transit-active ">deal with </div>
                                    <div class="transit-label  ">delivery made</div>
                                </div>
                        </div>
                        <div class="parcel-info">
                            <div class="parcel-from">
                                <h3 class="title dest"> - <?php echo $userRow['origin']; ?>   </h3>
                                <p class="parcel-date"><?php echo $userRow['shipped_date']; ?></p>
                                
                            </div>
                            <div class="parcel-arrow">
                                <img src="./track-page_files/arrow.png" alt="">
                            </div>
                            <div class="parcel-to">
                                <h3 class="title dest"> - <?php echo $userRow['destination']; ?>   </h3>
                                <p class="parcel-date"> <span class="emphais">Expected:</span> <?php echo $userRow['expected_date']; ?></p>
                            </div>                             
                        </div>
                        <div class="activity-brief">
                                <h4 class="activity-heading">Current Activity</h4>
                                <p class="activity-paragraph"> <?php echo $userRow['current_activity']; ?>  </p>

                        </div>
                    </div>
                </div>
            </div>
 

      <div class="history-wrapper">
          <!-- CUSTOMET CARE FORM -->
         <div class="history-left">
            <div class="left-sub-wrapper">
                    <h3 class="left-heading">
                    Customer Support
                    </h3>
                <img src="./track-page_files/customer_care.png" alt="" class="section-image">
            </div>
            <form action="mail.php" id="contact_form" method="POST">
                                        <div class="input-group">
                    <label for="sender" class="control-label">full name：</label>
                    <input type="text" name="sender_name" class="form-control">
                </div>
                <div class="input-group">
                    <label for="email" class="control-label">E-mail：</label>
                    <input type="email" name="sender_email" id="" class="form-control">
                </div>
                <div class="input-group">
                    <label for="subject" class="control-label">Subject：</label>
                    <input type="text" name="subject" id="" class="form-control">
                </div>
                    <div class="input-group">
                    <label for="body" class="control-label">Message Body：</label>
                <textarea name="body" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="input-group">
                    <input type="submit" name="submit" id="" value="S" class="send_mail">
                </div>
            </form>

            <div class="email-info">
            
                
            </div>
        </div>

        <!-- TABLE THAT HOLDS THE PARCEL HISTORY -->

        <div class="history-right">
                <div class="left-sub-wrapper">
                        <img src="./track-page_files/pin.png" alt="" class="section-image1">
                        <h3 class="section_heading">
                        History 
                        </h3>
                        <img src="./track-page_files/pin.png" alt="" class="section-image1">
                    </div>

            
            <p class="title">
            Where Your Shipment Has Been  
            </p>
            <table class="history-table">
                <thead class="table-head">
                    <tr>
                        <th class="serial">date</th>
                        <th>Location</th>
                        <th>Activity</th>
                    </tr>
                </thead>
                <tbody> 
                                           <tr>
                        <td class="serial"><?php echo $userRow['shipped_date']; ?></td>
                        <td><?php echo $userRow['destination']; ?></td>
                        <td><?php echo $userRow['activity']; ?></td>
                    </tr>
                                </tbody>
            </table>
        </div>
      </div>
    </main>

 
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <div class="footer-link">
                    <a href="about.php">ABOUT</a>
                    <a href="service.php">SERVICE</a>
                    <a href="support.php">SUPPORT</a>
                </div>
                <div class="footer-link">
                    <a href="faq.php">FAQ</a>
                    <a href="terms.php">TERMS</a>
                    <a href="fraud_prevention.php">ANTI-FRAUD</a>
                </div>
                
            </div>
            <div class="footer-right" style="color:#fff;">
                    <address style="color:#fff;">
                        1199 Rainbow Road,  <br>
                        Los Angeles,<br>
                        California, U.S.
                        90017.    <br>    <br>
                        +1 217-564-6191 <br>
                <aside style="font-size:0.9rem; align-text:center;padding:5px 0;">
               
                </aside>
                <aside style="color:#fff; padding:10px 0;">
                  
                </aside>
                     </address>
                 </div>
             </div>
         </footer> 
      
    <div class="qq-wrapper" id="qq-wrapper">
                
         </div>
    <aside class="copy">
            freightxpress all rights reserved| 2021
    </aside>
    

    

</body></html>