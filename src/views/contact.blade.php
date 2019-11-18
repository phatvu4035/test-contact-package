<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us</title>
    </head>
    <body>
        <h1>Contact Us any time</h1>
        <form method="POST" action="{{ route('contact') }}">
            @csrf
            <input type="text" name="name" placeholder="Your name.">
            <input type="email" name="email" placeholder="Your email.">
            <textarea name="message" cols="30" rows="10" placeholder="Message">

            </textarea>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
