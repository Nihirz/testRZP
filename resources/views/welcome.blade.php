<!doctype html>
<html lang="en">
  <head>
    <title>RazorPay Payment Integration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

    <div class="container">
        <div class="login-card">
            <div class="card-body">
                <form action="{{ url('/payment-request')}}" method="POST">
                    @csrf
                    <div class="row mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="ml-5" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="row mt-3">
                        <label for="email">email</label>
                        <input type="text" class="ml-5" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="row mt-3">
                        <label for="Address">Address</label>
                        <input type="text" class="ml-5" name="address" id="Address" placeholder="Enter Address">
                    </div>
                    <div class="row mt-3">
                        <label for="Contact">Contact</label>
                        <input type="text" class="ml-5" name="contactNumber" id="Contact" placeholder="Enter Contact">
                    </div>
                    <div class="row mt-3">
                        <label for="Ammount">Ammount</label>
                        <input type="text" class="ml-5" name="amount" id="Ammount" placeholder="Enter ammount">
                    </div>
                    <div class="row mt-3">
                        <input type="submit" class="ml-5" value="Submit">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>