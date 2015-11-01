<div class="row">
  <div class="col-sm-8 col-sm-offset-2">

    <?php if (!$submitted) { ?>
      <h1>Contact me</h1>

      <form id="contact-form" name="contact_form" method="post" action="/contact">

        <div class="form-group <?php if ($sender_name_err) { echo 'has-error'; } ?>">
          <label class="control-label" for="sender_name">Name</label>
          <input type="text" name="sender_name" class="form-control" id="name" value="<?php echo htmlspecialchars($sender_name); ?>">
          <span class="help-block has-error">
            <?php echo $sender_name_err; ?>
          </span>
        </div>

        <div class="form-group <?php if ($sender_email_err) { echo 'has-error'; } ?>">
          <label class="control-label" for="sender_email">Email address</label>
          <input type="email" name="sender_email" class="form-control" id="email" value="<?php echo htmlspecialchars($sender_email); ?>">
          <span class="help-block has-error">
            <?php echo $sender_email_err; ?>
          </span>
        </div>

        <div class="form-group">
          <label class="control-label" for="sender_phone">Phone number (optional)</label>
          <input type="text" name="sender_phone" class="form-control" id="phone" value="<?php echo htmlspecialchars($sender_phone); ?>">
        </div>

        <div class="form-group <?php if ($sender_message_err) { echo 'has-error'; } ?>">
          <label class="control-label" for="sender_message">Message</label>
          <textarea class="form-control" name="sender_message" rows="3" id="message"><?php echo htmlspecialchars($sender_message); ?></textarea>
          <span class="help-block has-error">
            <?php echo $sender_message_err; ?>
          </span>
        <div>

        <br>
        
        <input type="submit" class="btn btn-default btn-success" value="Send">
      </form>

    <?php } else { ?>

      <h1>Message sent!</h1>
      <p>Thank you for contacting me. I've received your message and I will respond very soon.</p>
      <p>&mdash; Martha</p>

    <?php } ?>
   
    <!-- <script src="../static/js/contact.js"></script> -->

  </div>
</div>
