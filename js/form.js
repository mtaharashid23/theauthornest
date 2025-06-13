$(document).ready(function () {
    $(".entryform").each(function () {
        const form = $(this);

        form.validate({
            rules: {
                name: { required: true },
                email: { required: true, email: true },
                phone: { required: true, digits: true },
                services: { required: true }
            },
            messages: {
                name: { required: "Please enter your name" },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                phone: {
                    required: "Please enter your phone number",
                    digits: "Please enter only digits"
                },
                services: { required: "Please select a service" }
            },
            submitHandler: function () {
                const name = form.find("[name='name']").val();
                const email = form.find("[name='email']").val();
                const phone = form.find("[name='phone']").val();
                const services = form.find("[name='services']").val();
                const message = form.find("[name='message']").val();
                const email_btn = form.find(".signupBtn");

                email_btn.addClass("disabled_button");

                $.ajax({
                    type: "POST",
                    url: "./email.php",
                    data: {
                        name, email, phone, services, message
                    },
                    success: function (response) {
                        email_btn.removeClass("disabled_button");
                        form[0].reset();

                        Swal.fire({
                            icon: "success",
                            title: "Email Sent Successfully",
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 4000,
                            timerProgressBar: true
                        });

                        setTimeout(() => {
                            window.location.href = "thank-you.php";
                        }, 1500);
                    },
                    error: function () {
                        email_btn.removeClass("disabled_button");
                        Swal.fire({
                            icon: "error",
                            title: "Oops!",
                            text: "Something went wrong. Please try again."
                        });
                    }
                });
            }
        });
    });
});
