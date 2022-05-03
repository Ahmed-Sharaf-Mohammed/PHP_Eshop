<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Checkout </title>
    <link rel="shortcut icon" href="A.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/Header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/up.css">
    <link rel="stylesheet" href="css/search.css">

</head>

<body class="bg-light vsc-initialized">
    
    <div class="container-fluid checkOut">
        <div class="row justify-content-center">
            <div class="card my-4 p-3">
                <div class="row main">
                    <div class="col-12"><span>Cart</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>Shipping confirmation</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>Credit card checkout</span></div>
                </div>
                <div class="row justify-content-center mrow">
                    <div class="col-12"> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" width="35px" height="35px" /> <img src="https://img.icons8.com/color/48/000000/visa.png" width="35px" height="35px" /> <img src="https://img.icons8.com/color/48/000000/paypal.png"
                            width="35px" height="35px" /> </div>
                </div>
                <form class="form-card">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group"> <input type="text" class="form-control p-0" id="number" required><label class="form-control-placeholder p-0" for="number">CardNumber</label> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group"> <input type="text" class="form-control p-0" id="name" required><label class="form-control-placeholder p-0" for="name">Cardholder'sName</label> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="form-group"> <input type="text" class="form-control p-0" id="sdate" required><label class="form-control-placeholder p-0" for="sdate">StartDate</label> </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group"> <input type="text" class="form-control p-0" id="expdate" required><label class="form-control-placeholder p-0" for="expdate">ExpirationDate</label> </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group"> <input type="password" class="form-control p-0" id="passw" required><label class="form-control-placeholder p-0" for="passw">CVV</label> </div>
                        </div>
                    </div>
                    <div class="row lrow mt-4 mb-3">
                        <div class="col-sm-8 col-12">
                            <h3>Grand Total:</h3>
                        </div>
                        <div class="col-sm-4 col-12">
                            <h5>&#36;1,449.00</h5>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-12"> <button type="button"  class="btn btn-primary btn-block  hun">Pay</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <script src="js/up.js"></script>
    <script src="js/app.js"></script>

</body>

</html>