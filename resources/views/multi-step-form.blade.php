<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>

    <style type="text/css">
       #personal_information,
#company_information{
  display:none;
}
        }
      </style>
  </head>
  <body>
   
    <div class="container panel panel-default ">
        <h2 class="panel-heading"> Laravel Multi Step Form </h2>
    <form id="contactForm">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name">
        </div>

        <div class="form-group"> 
            <textarea class="form-control" name="desc" placeholder="Message" id="message"></textarea>
          </div>
        <div class="form-group">
            <input type="text" name="Appointment" class="form-control" placeholder="Appointment" id="appoint">
        </div>

        <div class="form-group">
            <input type="text" name="price" class="form-control" placeholder="price" id="price">
        </div>

        <div class="form-group">
            <input type="text" name="hours" class="form-control" placeholder="hours" id="hours">
        </div>

        
        <div class="form-group">
            <button type="submit" class="btn btn-success" id="submit" name="submit"> Submit </button>
        </div>
    </form>
</div>

   <script type="text/javascript">

jQuery('#contactForm').submit(function(e){
    e.preventDefault();

    jQuery.ajax({
        url:"{{url('add')}}",
        data:jQuery('#contactForm').serialize(),
        type:'post',
        success:function(result){
            console.log(result);
        }
    })
});
      </script>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>