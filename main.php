<div class="panel-margin panel-padding">
      <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Token</h3>
      </div>
      <div class="jumbotron">
        <h1 class= "button-margin">Collect HTC token from bellow .</h1>
       <p><a class="button-margin btn btn-primary" href="#" role="button" onclick="newToken()">Allow Token</a> <a class="btn btn-success" href="#" role="button"  onclick="newTab()">Get Token</a></p>
     </div>
      <form action="index.php" method="POST">
     <div class="panel-margin">
      <div class="panel-body">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></span>
          <input name="token" type="text" class="form-control" placeholder="Paste Token Here" aria-describedby="basic-addon1">
        </div>

      </div>
      <div class="button-margin">
        <input type="submit" class="btn btn-primary" name="submit" value ="Login">
      </div>
    </div>
    </form>
  </div>
  </div>
