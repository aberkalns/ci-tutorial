        <?php 
            echo form_open('users/submit', 'class="form-signin"'); 
        ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <?php
            echo form_input('inputEmail', '', 'type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus');
        ?>
      <!--  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>