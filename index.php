<?php
include 'db_connection.php';

$conn = OpenCon();
$state = $conn->query('SELECT  * FROM states ');
$lga = $conn->query('SELECT * FROM lga  ');
$ward = $conn->query('SELECT * FROM ward');
$polling_unit = $conn->query('SELECT * FROM polling_unit');
$announced_pu_results = $conn->query('SELECT * FROM announced_pu_results');
$date_entered = $conn->query('SELECT * FROM date_entered ');
$party_abbreviation = $conn->query('SELECT * FROM party_abbreviation ');
$entered_by_user = $conn->query('SELECT * FROM entered_by_user ');

echo "connected successfully" . "<br>";
 echo "Today is " .date("Y/m/d") . "<br>";
        echo "Today is " .date("l") ."<br>";

        
        echo "The time is " .date("h:i:sa");


CloseCon ($conn);

?>


<html>
    <head>
    <link rel ="stylesheet" href ="C:\xamppp\htdocs\bincomphptest\bootstrap\css" >
    <link rel ="stylesheet" href ="style.css" >
    <script type="text/javascript" src="script.js"></script> 
    <title>
    bincomphptest
    </title>
    </head>
    <body>

    <select onchange="print_lga'lga', this.selectedIndex);" id="state" required  name ="state" class="fa-glass booking_form_dropdown form-control"></select>											
                <script language="javascript">print_state("state");</script>
                
        <h1 class = "head">Election Nigeria</h1>
        <h2>Results</h2>
        <!-- fetch data from database  for state-->

        <div class="residentialAddressMessage"></div>
        <div class="form-group required">
            <label class="control-label col-md-3 col-xs-3" for="PersonalContactDetails_Address_FirstLine">state</label>
            <div class="col-md-8 col-sm-8">
                <span id="inter_origin" style="display: block;"> 
				<select onchange="print_lga('lga', this.selectedIndex);" id="state" required  name ="state" class="fa-glass booking_form_dropdown form-control">select state</select> </span> 											
				<script language="javascript">print_state("state");</script>	
            </div>
        </div>



        <select name="state"  id ="state" class ="fa-glass booking_form_dropdwon form-control">
            <?php foreach ($state as $state) { ?>
            <option value="<?php echo $state
            ['state_id']; ?>"><?php echo $state['state_name'];?></option>
          <?php } ?>
        </select>
            
        <select name="lga"  id = "lga" class = "fa-glass booking_form_dropdwon form-control">
        
        <?php foreach ($lga as $lga) { ?>
            <option value="<?php echo $lga ['lga_id']; ?>"><?php echo $lga['lga_name'];?></option>
          <?php } ?>
        </select>

        <select name="ward"  class = "fa-glass booking_form_dropdwon form-control">
        
        <?php foreach ($ward as $ward) { ?>
            <option value="<?php echo $ward ['ward_id']; ?>"><?php echo $ward['ward_name'];?></option>
          <?php } ?>
        </select>

        <select name="polling_unit"  class = "fa-glass booking_form_dropdwon form-control">
        
        <?php foreach ($polling_unit as $polling_unit) { ?>
            <option value="<?php echo $polling_unit ['polling_unit_id']; ?>"><?php echo $polling_unit['polling_unit_name'];?></option>
          <?php } ?>
        </select>

        <table>
            <thead>
                <tr ><h1 class ="tablehead">Polling Unit Result</h1></tr>
                <tr class = "tablerow">
                    <th><h2>Time</h2></th>
                    <th><h2>Party</h2></th>
                    <th><h2>Party Score</h2></th>
                    <th><h2>Registerd By</h2></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($announced_pu_results as $announced_pu_results) {?> 
                <tr>
                <!-- php foreach loop -->
                    <td><?php echo $announced_pu_results ['date_entered']; ?></td>
                    <td><?php echo $announced_pu_results ['party_abbreviation']; ?></td>
                    <td><?php echo $announced_pu_results ['party_score'];?></td>
                    <td><?php echo $announced_pu_results['entered_by_user'];?></td>
                    <td><?php echo $announced_pu_results ['party_abbreviation']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>

    <!-- Footer -->
    <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="heading-left-light">
                                <h2>Say hello to Badmus</h2>
                                <p>To try php one of the most advanced server side  platform <br> for mobile and desktop</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form">
                                <div class="form-wrap">
                                    <div class="form-wrap-group">
                                        <input type="text" placeholder="Your Name" class="form-control">
                                        <input type="text" placeholder="Subject" class="border-top-transparent form-control">
                                    </div>                
                                    <div class="form-wrap-group border-left-transparent">
                                        <input type="text" placeholder="Your Email" class="form-control">
                                        <input type="text" placeholder="Contact Phone" class="border-top-transparent form-control">
                                    </div>                
                                </div>
                            </div>
                            <textarea rows="8" name="message" placeholder="Write comment here ..." class="border-top-transparent form-control"></textarea>
                            <button type="submit" class="btn-danger btn-md btn-block">Send it</button>
                        </div>
                    </div><!-- //end row -->
                </div>
            </div>
            <!-- End Footer -->

            <!-- Footer Coypright -->
            <div class="footer-copyright">
                <div class="container">
                    <h3>Badmus</h3>
                    <ul class="copyright-socials">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.linkedin.com/in/badmussulaimon"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <P>Designed with passion by <a href="http://www.linkedin.com/in/badmussulaimon">Badmus</a></P>
                </div>
            </div>
            <!-- End Footer Coypright -->
        </section>
        <!-- END CONTACT SECTION -->>
</html>