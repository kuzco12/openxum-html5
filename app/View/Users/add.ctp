
<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Ajouter User'); ?></legend>
        <?php echo $this->Form->input('username');

         echo $this->Form->input('password');

         echo $this->Form->input('passwd', array('name'=>'passwd'));

        echo $this->Form->input('email');

         ?>

    </fieldset>



    <script type="text/javascript">
        $(document).ready(function() {
            $("#UserAddForm").validate({
                rules: {
                    UserUsername: "required",
                    UserPassword: {
                        required: true,
                        minlength: 5
                    },
                    passwd: {
                        required: true,
                        minlength: 5,
                        equalTo: "#UserPassword"
                    },
                    "data[User][email]": {
                        required: true,
                        email: true,
                        equalTo: "#UserEmail"
                    }
                },
                messages: {
                    UserUsername: "Please enter a username",
                    UserPassword: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    passwd: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    "data[User][email]": "Please enter a valid email address"

                }
            });
           });
        </script>

<?php echo $this->Form->end(__('Ajouter'));?>
</div>