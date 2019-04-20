<?php
 $custom_title = 'Request Form | ';
 include '../includes/header.php';

 $firstName = $_POST["first_name"];
 $lastName = $_POST["last_name"];
 $email = $_POST["email"];
 $campaignId = $_POST["campaign_id"];
 $marketoCampaignId = $_POST["marketo_campaign_id"];

 if (
   !empty($firstName) &&
   !empty($lastName) &&
   !empty($email) &&
   !empty($campaignId) &&
   !empty($marketoCampaignId)
 ) {
   require './process.php';

   $leadId = register_lead (
     $firstName,
     $lastName,
     $email
   );

   $campaignAssigned = false;
   if (!empty($leadId)) {
     $campaignAssigned = register_lead_to_campaign($leadId, $marketoCampaignId);

     $registeredToBookshelf = register_lead_to_bookshelf($firstName, $lastName, $email, $campaignId);
     if ($campaignAssigned->isSuccess()) {
       $campaignAssigned = true;
     }
   }
 }
?>
 <div class="header-secondary-page"></div>
 <div class="header-top-dark">
   <?php include '../includes/nav.php'; ?>
 </div>
 <div class="ninesixty" style="margin:50px auto !important;">
   <h2 class="ids-title">Register for Bookshelf</h2>
   <?php if ($campaignAssigned) { ?>
     <p class="ids-message"><?php echo $email; ?> has been registered.</p>
   <?php } ?>
   <form class="ids-sampler" method="post">
     <?php if (!empty($_POST["password"]) && hash('sha256', $_POST["password"]) === "d9d65bceea9ca4517790ebacbcd216ef509b7f31d483b7fcd8c3e59cddf408ff") { ?>
     <ul>
       <li style="list-style:none;"><input type="text" name="first_name" placeholder="First Name" required/></li>
       <li style="list-style:none;"><input type="text" name="last_name" placeholder="Last Name" required/></li>
       <li style="list-style:none;"><input type="text" name="email" placeholder="Email" required/></li>
       <li style="list-style:none;">
         <select name="campaign_id" required>
           <option value>Select a Sample</option>
           <option value="IDSQ1TEB2019">French</option>
           <option value="IDSQ1QC2019">Spanish</option>
           <option value="IDSQ1ELAMS2019">English Language Arts – Middle School</option>
           <option value="IDSQ1DA2019">German</option>
           <option value="IDSQ1ZB2019">Chinese</option>
           <option value="IDSQ1AI2019">Italian</option>
           <option value="IDSQ1BT2019">Biotechnology</option>
           <option value="IDSQ1ECON2019">Economics</option>
           <option value="IDSQ1AP2019">Anatomy & Physiology</option>
         </select>
       </li>
       <li style="list-style:none;">
         <input type="hidden" name="marketo_campaign_id" value="7760" />
         <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
         <button>Register Sampler</button>
       </li>
    </ul>
  <?php } else { ?>
    <ul>
      <li style="list-style:none;">
        <input type="password" name="password" placeholder="Password" />
      </li>
      <li style="list-style:none;">
        <button>Next</button>
      </li>
    </ul>
  <?php } ?>
   </form>
   <div class="clearfix"></div>
 </div>
<?php include '../includes/footer.php'; ?>
