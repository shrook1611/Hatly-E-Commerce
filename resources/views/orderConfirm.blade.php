<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #ff6b35;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .order-details {
            background-color: white;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
        }
        .item {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }
        .total {
            font-size: 1.2em;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
            color: #ff6b35;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Order Confirmation</h1>
        </div>
        
        <div class="content">
         
            <p>Thank you for your order! We're getting your order ready to be shipped.</p>
            
          
        
        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Store. All rights reserved.</p>
        </div>
    </div>
</body>
</html>