<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coalition</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <form class="product container">
          <div class="form-group">
            <label for="name">Product Name</label>
            <input class="form-control" id="name" placeholder="Screwdriver">
          </div>
          <div class="form-group">
            <label for="quantity">Password</label>
            <input class="form-control" id="quantity" placeholder="Number">
          </div>
          <div class="form-group">
            <label for="price">Password</label>
            <input class="form-control" id="price" placeholder="$1.00">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <script src="{{ URL::to('src/js/app2.js') }}"></script>
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous">
              
          </script>
    </body>
</html>
