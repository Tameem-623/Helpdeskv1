<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Helpdesk</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .jumbotron {
            background-color: #1E535A;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 0px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary,
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #1E535A;
            border-color: #1E535A;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
            background-color: #1E535A;
            border-color: #1E535A;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #007bff;
            border-color: #007bff;
            transform: scale(1.07);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-secondary:hover,
        .btn-secondary:focus {
            background-color: #007bff;
            border-color: #007bff;
            transform: scale(1.07);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .footer {
            background-color: #1E535A;
            padding: 5px;
            color: #fff;
            text-align: center;
        }
        .card {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
            margin-bottom: 40px;
        }

        .card-body {
            padding: 20px;
            
        }
    </style>
      <script>
    function showWarning() {
      alert("It takes around 4-5 days for domestic shipping.");
    }
    function PaymentsMethods() {
      alert("Easypaisa, COD, Bank Transfer, JazzCash, UBL Omni, etc.");
    }
  </script>


</head>
<body>
    <div class="">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Customer Support Service</h1>
            <p class="lead">Get instant support for all your queries</p>
        </div>

        <div class="row justify-content-center" >
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Important Announcement</h4>
                        <div class="alert alert-info">
                        <p>At Our Helpdesk, We Prioritize Your Satisfaction!</p>
    <p>Our team is committed to providing exceptional support and ensuring your issues are resolved promptly and efficiently.</p>
    <p>We value your feedback and continuously strive to improve our services to meet your needs.</p>
    <p>Thank you for choosing Our Helpdesk. We appreciate your trust in us.</p>
                        </div>

                        <h4>FAQs</h4>
                        <ul class="list-group">
                            <li class="list-group-item"><a href="https://support.google.com/accounts/answer/41078?hl=en&co=GENIE.Platform%3DAndroid" target="_blank"> How do I reset my password?</a></li>
                            <li class="list-group-item"><a href="#" onclick="PaymentsMethods()"> What are the accepted payment methods?</a></li>
                                
                            <li class="list-group-item"><a href="#" onclick="showWarning()"> How long does shipping take?</a></li>
                          
                            
                        </ul>

                        <div class="text-center mt-4">
                            <p>If you have an account, please log in. Otherwise, register for a new account.</p>
                        
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-primary mx-">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-secondary mx-2">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-secondary mx-2">Register</a>
                                @endif
                                @endauth
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2023 Personal Computing Services. All rights reserved.</p>
    </div>
    
    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
