    <section class="six" id="contact">
      <div class="row">
        <h3 class="large-10 large-centered columns text-center">
          Working on something great? I'd love to help make it happen.
        </h3>
      </div> <!-- /row -->
      <div class="row">
        <p class="large-8 large-centered columns text-center">
          Let’s chat about your business, product, or services, and if I think there's potential to gain traction or make a lot more money through strategic design, we’ll go from there.
        </p>
      </div><!-- /row -->
      <form method="post" action="inc/contact-mailer.php">
        <div class="row">
          <div class="large-5 medium-6 small-8 small-centered columns">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" autocorrect="off">
            <span class="hint">What is your full name?</span>
          </div> <!-- /.large-5 medium-6 small-8 small-centered columns -->
        </div> <!-- /.row -->
        <div class="row">
          <div class="large-5 medium-6 small-8 small-centered columns">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email">
            <span>What is your email address?</span>
          </div> <!-- /.large-5 medium-6 small-8 small-centered columns -->
        </div> <!-- /row -->
        <div class="row">
          <div class="large-5 medium-6 small-8 small-centered columns">
            <label for="company">Company</label>
            <input type="text" name="company" id="company">
            <span>Please, tell me the name of your company.</span>
          </div> <!-- /.large-5 medium-6 small-8 small-centered columns -->
        </div><!-- /row -->
        <div class="row">
          <div class="large-5 medium-6 small-8 small-centered columns">
            <label for="description">Details</label>
            <textarea name="description" id="description" cols="40" rows="5" placeholder="Share what you can about your project."></textarea>
            <span>Tell me something about your project.</span>
          </div> <!-- /.large-5 medium-6 small-8 small-centered columns -->
        </div> <!-- /row -->
        <?php /* <div class="row">
          <div class="large-8 small-10">
            <div class="row">
              <div class="small-4 large-6 columns">
                <label for="date" class="right inline">Start Date</label>
              </div>
              <div class="small-8 large-6 columns">
                <select name="date" id="date">
                  <option value="1 months">In 1 Month</option>
                  <option value="3 Months">In 3 Months</option>
                  <option value="6 Months">In 6 Months</option>
                </select>
              </div>
            </div>
          </div>
        </div> <!-- /row -->
        <div class="row">
          <div class="large-8 small-10">
            <div class="row">
              <div class="small-4 large-6 columns">
                <label for="start" class="right inline">Budget</label>
              </div>
              <div class="small-8 large-6 columns">
                <select name="budget" id="budget">
                  <option value="$3,000 - $10,000">$3,000 - $10,000</option>
                  <option value="$10,000 - $20,000" selected>$10,000 - $20,000</option>
                  <option value="$20,000 - $30,000">$20,000 - $30,000</option>
                </select>
              </div>
            </div>
          </div>
        </div><!-- /row -->
        <div class="row">
          <div class="large-8 small-10 small-centered">
            <div class="row">
              <div class="small-4 large-6 columns">
                <label for="type" class="right inline">Type</label>
              </div>
              <div class="small-8 large-6 columns">
                <input type="radio" name="projectType" value="Brand New" id="brandNew" checked class="css-checkbox"><label for="brandNew" class="css-label">Brand New</label> <br>
                <input type="radio" name="projectType" value="Redesign" id="Redesign" class="css-checkbox"><label for="Redesign" class="css-label">Redesign</label>
              </div>
            </div>
          </div>
        </div><!-- /row --> */ ?>
        <div class="row">
          <div class="large-8 small-8 small-centered columns text-center">
            <input type="submit" id="submit" class="button radius text-center" value="Let's talk!">
          </div>
        </div>
      </form>
    </section>
