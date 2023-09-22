        <!--Newsletter Subscription-->
        <div class="newsletter-full-width">
          <div class="container">             <!--Add header as well, to start our content body. So we can eventually get some scrolling functionality.-->
            <form method="POST" action="#" accept-charset="UTF-8" id="sign-up" class="sign-up">
              <h2>Email Newsletter Sign-Up</h2>
              <div class="sign-up-inputs-wrapper">
                <div class="sign-up-input">
                  <div class="form-group">
                    <label for="newsletter-name" class="required">Your Name</label>
                    <input class="form-control" id="newsletter-name" name="name" type="text" value="">
                  </div>
                </div>
                <div class="sign-up-input">
                  <div class="form-group">
                    <label for="newsletter-email" class="required">Your Email</label>
                    <input class="form-control" id="newsletter-email" name="email" type="email" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="checkcontainer">
                  <input type="checkbox">
                  <span class="checkmark"></span>
                  <span class="media-body">
                    Please tick this box if you wish to receive marketing information from us.
                    Please see our <a href="#" rel="noopener noreferrer">Privacy Policy</a> for more information on how we keep your data safe.
                  </span>
                </label>
              </div>
              <button name="submit" class="btn btn-primary"> Subscribe </button> <!--Strip deault styles from this button. Our logo "buttons" are not actually buttons, so dont use that-->
            </form>
          </div>
        </div>