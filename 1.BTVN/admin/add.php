<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>


  <body>
  
	  <form action="ADD2.PHP" method="POST">
  <div class="container" style="background-color:blanchedalmond ; border:5px solid #cecece;" >
  <div class="col-md-6">
    <h1 class="text-center">Thêm Môn Học</h1>   
      <form class="card-body" method="POST">
        <div class="form-group">
          <label>Mã Môn</label><input type="text" name="mamon"  class="form-control " placeholder=" "aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label>Tên Môn</label>
          <input type="text" name="tenmon"  class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control" name="description" value=""></textarea>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Lưu Lại</button>&nbsp; -->
		<button type="button" name="luu" class="btn btn-danger" onclick="window.open('index.php','_self')">Lưu Lại</button>
  </div>
  </div>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
