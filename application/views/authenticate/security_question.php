<?php echo form_open('authenticate/security_question'); ?>
    <input type="text" readonly value="<?php echo $question ?>" >
    <input type="text" name="answer" class="">
    <input type="submit" name="check_answer" value="Submit">
    </form>
