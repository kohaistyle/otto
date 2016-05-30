<?php include "inc/header.inc.php"; ?>


    <div id="page" class="content">

				<ol class="breadcrumb " style="margin-bottom: 5px;">
					<li><a href="#">// Otto</a></li>
					<li class="active"><a href="#">Clients</a></li>
				</ol>
        

      <div class="starter-template">
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>



      <div class="row bf-blank">
  			<div class="col-md-4 bf-size">
          <button id="not" type="button" class="btn btn-info">Notify</button>      


    		</div>
      </div>        


          <hr>

 <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>




      <!-- form -------------------------------------------------------------------------->    
    <div class="row bf-blank">
      <div class="col-md-6">
      
      <form class="form-horizontal">
      <fieldset>
      
      <!-- Form Name -->
      <legend>Nouveau Contact</legend>
      
      <!-- Text input-->
      <div class="control-group">
        <label class="control-label" for="Nom">Nom</label>
        <div class="controls">
          <input id="Nom" name="Nom" type="text" placeholder="Nom" class="input-xlarge" required="">
          
        </div>
      </div>
      
      <!-- Text input-->
      <div class="control-group">
        <label class="control-label" for="Mail">Mail</label>
        <div class="controls">
          <input id="Mail" name="Mail" type="text" placeholder="Mail" class="input-xlarge">
          
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="control-group">
        <label class="control-label" for="Adresse">Adresse</label>
        <div class="controls">                     
          <textarea id="Adresse" name="Adresse">Adresse</textarea>
        </div>
      </div>
      
      <!-- Textarea -->
      <div class="control-group">
        <label class="control-label" for="Notes">Notes</label>
        <div class="controls">                     
          <textarea id="Notes" name="Notes">Notes</textarea>
        </div>
      </div>
      
      <!-- Button (Double) -->
      <div class="control-group">
        <label class="control-label" for="contactSubmit"></label>
        <div class="controls">
          <button id="contactSubmit" name="contactSubmit" class="btn btn-info">Ajouter</button>
          <button id="ContactCancel" name="ContactCancel" class="btn btn-danger">Abandonner</button>
        </div>
      </div>
      
      </fieldset>
      </form>
      
    	</div>
    </div>        
            
      <!-- form -------------------------------------------------------------------------->





    </div><!-- /.container -->

    
<script>

  $("#not").click( function (){
  
    $.bootstrapGrowl("another message, yay!", {
      ele: 'body', // which element to append to
      type: 'info', // (null, 'info', 'error', 'success')
      offset: {from: 'bottom', amount: 20}, // 'top', or 'bottom'
      align: 'center', // ('left', 'right', or 'center')
      width: 'auto', // (integer, or 'auto')
      delay: 4000,
      allow_dismiss: true,
      stackup_spacing: 10 // spacing between consecutively stacked growls.
    });
    
  });
  
</script>
    
    
<?php include "inc/footer.inc.php"; ?>
