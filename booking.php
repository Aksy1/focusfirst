<!DOCTYPE html>
<html>
<head>
  <title>Book Your Slot</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <link rel="stylesheet" href="static/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=shield" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0&icon_names=group" />
</head>
<body class="poppins-regular bg-black">
<div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="text-center py-5">
  <img src="static/img/focusfirstlogo1.png" width="400" />
  </div>
  <h2 class="text-white">Book Your Slot</h2>
  <form id="bookingForm">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>
    <div class="d-flex justify-content-center align-items-center flex-column">
    <button class="button-5" type="submit">Next</button>
    </div>
  </form>
  </div>
</div>
  <script>
    $('#bookingForm').on('submit', function(e) {
      e.preventDefault();

      $.ajax({
        url: 'create_order.php',
        method: 'POST',
        data: $(this).serialize(),
        success: function(data) {
          var options = {
            "key": "<?php echo 'RAZORPAY_KEY_HERE'; ?>",
            "amount": data.amount,
            "currency": "INR",
            "name": "Your Brand",
            "description": "Masterclass Booking",
            "order_id": data.id,
            "handler": function (response){
              $.post('payment_success.php', {
                payment_id: response.razorpay_payment_id,
                order_id: response.razorpay_order_id,
                signature: response.razorpay_signature,
                name: $('input[name=name]').val(),
                email: $('input[name=email]').val(),
                phone: $('input[name=phone]').val()
              }, function(msg){
                alert(msg);
                window.location.reload();
              });
            }
          };
          var rzp1 = new Razorpay(options);
          rzp1.open();
        }
      });
    });
  </script>
</body>
</html>
