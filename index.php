
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .container{
        background: coral;
        

    }
</style>
</head>
<body>
    
    <div class="container">
    <h1>Simple Interest Calculator</h1>
        <form action="result.php" method="get">
            <div class="form-group">
            <label for="principle">Principle</label>
            <input type="text" name="principle" id="principle" value="" class="form-control">
            </div>
            <div class="form-group">
            <label for="rate">Rate</label>
            <input type="text" name="rate" id="rate" value="" class="form-control">
            </div>
            <div class="form-group">
            <label for="time">years</label>
            <input type="text" name="time" id="time" value="" class="form-control">
            </div>
            <div class="btn">
            <input type="submit" id=""  value="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>