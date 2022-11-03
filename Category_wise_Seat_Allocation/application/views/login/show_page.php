<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Category wise Seat Allocation</title>
</head>

<body>
    <div class="container mt-5">
        <center>
            <h1 class="mb-5">Category wise Seat Allocation</h1>
        </center>
        <a href="http://localhost/Category_wise_Seat_Allocation/welcome/logout" class="btn btn-danger float-right" id="add">logout</a>
        <h3 class="mb-5">Welcome <?= Session::get('username') ?></h3>
        <div class="row">
            <div class="col-sm-10">
            <table class="table " style="margin-top:20px;">
			   
				<tbody id="tbody">
				</tbody>
			</table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->

    <script>
        showTable();
        function showTable(){
	          var url = 'http://localhost/Category_wise_Seat_Allocation/';
                $.ajax({
                    type: 'POST',
                    url: url + 'welcome/read',
                    success:function(r){
                        $('#tbody').html(r);
                    }
                });
            }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
</body>

</html>