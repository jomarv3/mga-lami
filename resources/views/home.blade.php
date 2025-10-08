   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Home - Flash Message Example</title>
       <style>
           body { font-family: Arial, sans-serif; margin: 20px; }
           .container { max-width: 600px; margin: 0 auto; }
           .alert {
               padding: 15px;
               margin-bottom: 20px;
               border: 1px solid transparent;
               border-radius: 4px;
               text-align: center;
           }
           .alert-success {
               color: #3c763d;
               background-color: #dff0d8;
               border-color: #d6e9c6;
           }
           .alert-error {
               color: #a94442;
               background-color: #f2dede;
               border-color: #ebccd1;
           }
           a { display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; }
           a:hover { background: #0056b3; }
       </style>
   </head>
   <body>
       <div class="container">
           <h1>Welcome to Home Page</h1>
           
           <!-- Display success flash message if it exists -->
           @if (session('success'))
               <div class="alert alert-success">
                   {{ session('success') }}
               </div>
           @endif
           
           <!-- Display error flash message if it exists -->
           @if (session('error'))
               <div class="alert alert-error">
                   {{ session('error') }}
               </div>
           @endif
           
           <p>No message? <a href="{{ route('show.message') }}">Click here to trigger a temporary success message</a></p>
           
           <!-- Optional: Link to trigger error (add this route if needed) -->
           <!-- <p>Or <a href="{{ route('show.error') }}">trigger an error message</a></p> -->
       </div>
   </body>
   </html>
   