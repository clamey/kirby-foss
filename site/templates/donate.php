<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->byline()->kirbytext() ?>

      <div class="donateForm">
        <form action="/handler.php" method="POST" name="donateForm">
          <div class="donateType cf">
            <div><label><input type="radio" name="ssl_recurring" value="one_time" checked>One Time</label></div>
            <div><label><input type="radio" name="ssl_recurring" value="recurring">Recur Monthy</label></div>
          </div>
          <input type="number" name="ssl_amount" value="" placeholder="Donation Amount"/>
          <div>
            <input type="text" name="ssl_first_name" value="" placeholder="First Name"/>
            <input type="text" name="ssl_last_name" value="" placeholder="Last Name"/>
          </div>
          <input id="donateAddress" type="text" name="ssl_avs_address" value="" placeholder="Street Address"/>
          <input type="text" name="ssl_city" value="" placeholder="City"/>

<select name="ssl_state">
	<option value="AL">AL</option>
	<option value="AK">AK</option>
	<option value="AZ">AZ</option>
	<option value="AR">AR</option>
	<option value="CA">CA</option>
	<option value="CO" selected>CO</option>
	<option value="CT">CT</option>
	<option value="DE">DE</option>
	<option value="DC">DC</option>
	<option value="FL">FL</option>
	<option value="GA">GA</option>
	<option value="HI">HI</option>
	<option value="ID">ID</option>
	<option value="IL">IL</option>
	<option value="IN">IN</option>
	<option value="IA">IA</option>
	<option value="KS">KS</option>
	<option value="KY">KY</option>
	<option value="LA">LA</option>
	<option value="ME">ME</option>
	<option value="MD">MD</option>
	<option value="MA">MA</option>
	<option value="MI">MI</option>
	<option value="MN">MN</option>
	<option value="MS">MS</option>
	<option value="MO">MO</option>
	<option value="MT">MT</option>
	<option value="NE">NE</option>
	<option value="NV">NV</option>
	<option value="NH">NH</option>
	<option value="NJ">NJ</option>
	<option value="NM">NM</option>
	<option value="NY">NY</option>
	<option value="NC">NC</option>
	<option value="ND">ND</option>
	<option value="OH">OH</option>
	<option value="OK">OK</option>
	<option value="OR">OR</option>
	<option value="PA">OA</option>
	<option value="RI">RI</option>
	<option value="SC">SC</option>
	<option value="SD">SD</option>
	<option value="TN">TN</option>
	<option value="TX">TX</option>
	<option value="UT">UT</option>
	<option value="VT">VT</option>
	<option value="VA">VA</option>
	<option value="WA">WA</option>
	<option value="WV">WV</option>
	<option value="WI">WI</option>
	<option value="WY">WY</option>
</select>	
          <input id="donateZip" type="number" name="ssl_avs_zip" value="" placeholder="Zipcode"/>
          <input type="email" name="ssl_email" value="" placeholder="Email"/>
          <input type="submit" value="Next"/>
        </form>
      </div>

      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>