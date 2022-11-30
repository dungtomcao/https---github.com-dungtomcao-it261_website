
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <label for="name">Name:</label></br>
                <input type="text" id="name" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
                <span class="err"><?php echo $name_Err; ?></span>

                <label for="email">Email:</label></br>
                <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                <span class="err"><?php echo $email_Err; ?></span>

                <label for="phone">Phone:</label></br>
                <input type="tel" id="phone" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
                <span class="err"><?php echo $phone_Err; ?></span>

                <label for="fungi">Types of fungi you want to see more:</label></br>
                <ul>
                    <li><input type="checkbox" id="fungi" name="fungi[]" value="Edible Fungi" 
                    <?php if(isset($_POST['fungi']) && in_array('Edible Fungi', $fungi)) echo 'checked = "checked"'; ?>
                    >Edible Fungi</li>
                    <li><input type="checkbox" id="fungi" name="fungi[]" value="Poisonous Fungi"
                    <?php if(isset($_POST['fungi']) && in_array('Poisonous Fungi', $fungi)) echo 'checked = "checked"'; ?>
                    >Poisonous Fungi</li>
                    <li><input type="checkbox" id="fungi" name="fungi[]" value="Rare Fungi"
                    <?php if(isset($_POST['fungi']) && in_array('Rare Fungi', $fungi)) echo 'checked = "checked"'; ?>
                    >Rare Fungi</li>
                    <li><input type="checkbox" id="fungi" name="fungi[]" value="Common Fungi"
                    <?php if(isset($_POST['fungi']) && in_array('Common Fungi', $fungi)) echo 'checked = "checked"'; ?>
                    >Common Fungi</li>
                    <li><input type="checkbox" id="fungi" name="fungi[]" value="Mushroom Picking Tips"
                    <?php if(isset($_POST['fungi']) && in_array('Mushroom Picking Tips', $fungi)) echo 'checked = "checked"'; ?>
                    >Mushroom Picking Tips</li>
                    </ul>
                    <span class="err"><?php echo $fungi_Err; ?></span>

                <label for="rating">Rate our website: </label>
                <select id="rating" name="rating">
                    <option value = "" NULL 
                    <?php if(isset($_POST['rating']) && $_POST['rating'] == NULL) echo 'selected = "unselected"'; ?>
                    >0</option>
                    <option value = "1"
                    <?php if(isset($_POST['rating']) && $_POST['rating'] == '1') echo 'selected = "selected"'; ?>
                    >1</option>
                    <option value = "2"
                    <?php if(isset($_POST['rating']) && $_POST['rating'] == '2') echo 'selected = "selected"'; ?>
                    >2</option>
                    <option value = "3"
                    <?php if(isset($_POST['rating']) && $_POST['rating'] == '3') echo 'selected = "selected"'; ?>
                    >3</option>
                    <option value = "4"
                    <?php if(isset($_POST['rating']) && $_POST['rating'] == '4') echo 'selected = "selected"'; ?>
                    >4</option>
                    <option value = "5"
                    <?php if(isset($_POST['rating']) && $_POST['rating'] == '5') echo 'selected = "selected"'; ?>
                    >5</option>
                </select></br>
                <span class="err"><?php echo $rating_Err; ?></span>
                
                <label for="comment">Comment (optional):</label></br>
                <textarea type="input" id="comment" name="comment" value="<?php if(isset($_POST['comment'])) echo htmlspecialchars($_POST['comment']); ?>"></textarea></br>

                <label for="privacy">Privacy</label></br>
                    <ul>
                        <li><input type="radio" id="privacy" name="privacy" value="agree">I agree!</li>
                        </ul>
                        <span class="err"><?php echo $privacy_Err; ?></span>
                <input type="submit" value="Send!">
                <p><a href="">Reset</a></p>
            </fieldset>
        </form>