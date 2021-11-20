<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <legend><h3>Contact Form</h3></legend>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
                <span class="err"><?php echo $name_Err; ?></span>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                <span class="err"><?php echo $email_Err; ?></span>

                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
                <span class="err"><?php echo $phone_Err; ?></span>

                <label for="jelly">Your favorite jellyfishes</label>
                <ul>
                    <li><input type="checkbox" id="jelly" name="jelly[]" value="crystal" 
                    <?php if(isset($_POST['jelly']) && in_array('crystal', $jelly)) echo 'checked = "checked"'; ?>
                    >Crystal Jellyfish</li>
                    <li><input type="checkbox" id="jelly" name="jelly[]" value="friedegg"
                    <?php if(isset($_POST['jelly']) && in_array('friedegg', $jelly)) echo 'checked = "checked"'; ?>
                    >Fried Egg Jellyfish</li>
                    <li><input type="checkbox" id="jelly" name="jelly[]" value="flowerhat"
                    <?php if(isset($_POST['jelly']) && in_array('flowerhat', $jelly)) echo 'checked = "checked"'; ?>
                    >Flower Hat Jellyfish</li>
                    <li><input type="checkbox" id="jelly" name="jelly[]" value="atolla"
                    <?php if(isset($_POST['jelly']) && in_array('atolla', $jelly)) echo 'checked = "checked"'; ?>
                    >Atolla Jellyfish</li>
                    <li><input type="checkbox" id="jelly" name="jelly[]" value="pinkmeanie"
                    <?php if(isset($_POST['jelly']) && in_array('pinkmeanie', $jelly)) echo 'checked = "checked"'; ?>
                    >Pink Meanie Jellyfish</li>
                    </ul>
                    <span class="err"><?php echo $jelly_Err; ?></span>

                <label for="zoo">Zoo Animal</label>
                <select id="zoo" name="zoo">
                    <option value = "" NULL 
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == NULL) echo 'selected = "unselected"'; ?>
                    >Select one</option>
                    <option value = "jaguar"
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == 'jaguar') echo 'selected = "selected"'; ?>
                    >Jaguar</option>
                    <option value = "ringtailed"
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == 'ringtailed') echo 'selected = "selected"'; ?>
                    >Ring Tailed Lemur</option>
                    <option value = "redruffed"
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == 'redruffed') echo 'selected = "selected"'; ?>
                    >Red Ruffed Lemur</option>
                    <option value = "goldenlion"
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == 'goldenlion') echo 'selected = "selected"'; ?>
                    >Golden Lion Tamarin</option>
                    <option value = "poisondart"
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == 'poisondart') echo 'selected = "selected"'; ?>
                    >Poison Dart Frog</option>
                    <option value = "saki"
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == 'saki') echo 'selected = "selected"'; ?>
                    >Saki Monkey</option>
                    <option value = "toucan"
                    <?php if(isset($_POST['zoo']) && $_POST['zoo'] == 'toucan') echo 'selected = "selected"'; ?>
                    >Toucan</option>
                </select>
                <span class="err"><?php echo $zoo_Err; ?></span>

                <label for="privacy">Privacy</label>
                    <ul>
                        <li><input type="radio" id="privacy" name="privacy" value="agree">I agree!</li>
                        </ul>
                        <span class="err"><?php echo $privacy_Err; ?></span>
                <input type="submit" value="Send!">
                <p><a href="">Reset</a></p>
            </fieldset>
        </form>