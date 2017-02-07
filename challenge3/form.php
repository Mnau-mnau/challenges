
<section class = "nm-main">
    <h1 class="heading"> DIY online classes lector database </h1>

    <h4 class="subheading"> Do you want to be our online lecturer?</h4>
    <h5 class="subheading2"> Please fill up this form to apply</h5>

    <form class="nm-form" action="" method="post">
        First name: <input class="nm-input" type="text" name="firstname"><br>
        Last name: <input class="nm-input" type="text" name="lastname"><br>
        Email: <input class="nm-input" type="text" name="email"><br>
        Gender: <select class="nm-choice" name="gender"><br>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select><br>

        Main language: <select class="nm-choice extra" name="language"><br>
                    <option value="">---</option>
                    <option value="cz">Czech</option>
                    <option value="en">English</option>
                    </select><br>
        Write something about yourself:<br>
        <textarea class="nm-input-textarea extra"name="message" rows="10" cols="50">
        </textarea><br>
        Do you have previous teaching experience?<br>
        <input type="hidden" name="experience" value=0 > <!-- this sets value if not selected! -->
        <input type="checkbox" class="nm-choice" name="experience" value="1"> I have taught before<br>
        <input class="nm-submit" type="submit" value=" Send and apply">
    </form>
</section>
