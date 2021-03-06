 <!DOCTYPE html>
 <html>
 <head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">

    <!-- Jquery JS -->
    <script src="js/jquery-3.1.1.js"></script>

    <!-- Jquery Validate Form -->
    <script src="js/jquery.validate.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- CSS -->
    <link href="css/admin01.css" rel="stylesheet">

    <!-- JS -->
    <script src="js/js.js"></script>
    <script type="text/javascript">

    // API one
    $(document).ready(function(){
        $('#load_dl').click(function(e){
            e.preventDefault();
            $('#resuft').load('tb.php', function() {
                $('.load2').click(function() {
                    e.preventDefault();
                    var id=$(this).data('id');
                    $('#resuft2').load('tb2.php?id='+id,function(){

                    })
                })
            });
        });
    });

</script>

</head>
<body>
    <!-- <HEADER> -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <!-- Logo -->
                    <div class="logo text-center">
                        <h1><a href="" >Application Programming Interface </a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <a id="load_dl" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>API ONE</a>
</div>

<!-- Table nhan du lieu API one -->
<div id="resuft"></div>

<!-- Tao popup -->
<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thông tin chi tiết</h4>
        </div>
        <div class="modal-body" id="resuft2">      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End popup -->
<footer>
    <div class="container">
        <div class="copy text-center">
            @Copyright 2017 <a href='#'></a>
        </div> 
    </div>
</footer>
</body>
</html>