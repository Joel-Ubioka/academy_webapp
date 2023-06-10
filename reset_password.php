<div class="signup_container">

  <h1>Reset Password</h1>
  <p>A reset code was sent to your email. Check your email to reset your password.</p>

  <form action="ajax_functions/reset_password_ajax.php" method="POST" id="signup_form" class="update_form_data">
    <div class="input_container">
      <span class="material-symbols-outlined">
        person
      </span>
      <input type="text" name="reset_code" class="form_input" placeholder="Reset code" required>
    </div>


    <div class="input_container">
      <span class="material-symbols-outlined">
        lock
      </span>

      <input type="password" name="new_password" class="form_input" placeholder="New Password" required>
      <span class="material-symbols-outlined show_password" title="Show password">
        visibility
      </span>

      <span class="material-symbols-outlined hide_password" title="Hide password">
        visibility_off
      </span>
    </div>
    <div class="input_container">
      <span class="material-symbols-outlined">
        lock
      </span>
      <input type="password" name="confirm_password" class="form_input" placeholder="Confirm Password" required>
      <span class="material-symbols-outlined show_password" title="Show password">
        visibility
      </span>
      <span class="material-symbols-outlined hide_password" title="Hide password">
        visibility_off
      </span>

    </div>

    <button name="submit" class="close_btn">Reset Password</button>

  </form>

</div>