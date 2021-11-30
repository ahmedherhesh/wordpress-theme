<form id="herhesh_contact_form" action="" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Your Name" name='name'>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="Your Email" name='email'>
    </div>
    <div class="form-group">
        <textarea class="form-control" id="message" placeholder="Your Message" name='message'></textarea>
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>
<script>
    window.onload = function() {
        $('#herhesh_contact_form').on('submit', function(e) {
            e.preventDefault();
            let form = $(this),
                name = form.find('#name').val(),
                email = form.find('#email').val(),
                message = form.find('#message').val(),
                ajaxURL = form.data('url');
            if (name == '' || email == '' || message == ''){
                console.log('Required inputs are empty');
                return;
            } 

            $.ajax({
                url: ajaxURL,
                type: 'post',
                data: {
                    name: name,
                    email: email,
                    message: message,
                    action: 'herhesh_save_user_contact_form'
                },
                error: function(res) {
                    console.log(res);
                },
                success: function(res) {
                    console.log(res);
                }

            });
        });
    }
</script>