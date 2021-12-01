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
<style>
    .error {
        border: 1px solid #f00
    }
</style>
<script>
    window.onload = function() {
        $('#herhesh_contact_form').on('submit', function(e) {
            e.preventDefault();
            let form = $(this),
                name = form.find('#name').val(),
                email = form.find('#email').val(),
                message = form.find('#message').val(),
                ajaxURL = form.data('url'),
                inputs = document.getElementsByClassName('form-control'),
                errors = [];

            for (let i = 0; i < inputs.length; i++) {
                let input = inputs[i];
                if (input.value == '') {
                    errors.push(input.id);
                    if (input.className == 'form-control error') {
                        return;
                    }
                    input.classList.add('error');
                    input.parentElement.classList.add('has-error');
                    input.parentElement.innerHTML += `<p class='text-danger' id="error_${input.id}"> This ${input.id} field is required </p>`

                } else {
                    input.classList.remove('error');
                    let error_input = document.getElementById(`error_${input.id}`);
                    if (error_input != null) {
                        error_input.outerHTML = '';
                    }
                }
            }
            if (errors.length == 0) {

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
            }
        });
    }
</script>