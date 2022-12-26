<?php
require ('./includes/Connect.php');
require ('./includes/Header.php');
require ('./includes/Function.php');
?>




  <?php
    $insert = false;
  if(isset($_POST['addNote'])) {
    $title = $_POST["addTit"];
    $description = $_POST["adddes"];
  
    $sql = "insert into note(title, description) values('$title','$description')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
      $insert = true;
      header('location:/index.php');
      
    }
    else {
        echo "This query will not work";
    }
   
  }
    ?>
    <?php
    
    if ($insert) {
      handleShowAlert();
    }
   
    ?>
    <!-- modal for updating the content -->

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit the modal
</button>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- container of the Adding and displaying the content  -->
  <div class="container my-3">
    <h1>Welcome in the CRUD opera MagicNotes</h1>
    <form method="post" action="crud/index.php">
      <div class="mb-3">
        <label for="addtitle" class="form-label">Add Title</label>
        <input type="text" name="addTit" class="form-control" id="addtitle" required>

      </div>
      <div class="form-floating">
        <textarea class="form-control" name="adddes" placeholder="Leave a comment here" id="addDesc" cols="5"
          required></textarea>
        <label for="adddesc">Enter Your Concern</label>
      </div>

      <button type="submit" onclick="handleShowAlert()" name="addNote" id="addnote" class="btn btn-primary my-3">Add Note</button>
    </form>
  </div>

  <div class="container">
    <table id="myTable" class="table table-striped">
      <thead>
        <tr>
          <th scope="col">SNO.</th>
          <th scope="col">Title</th>
          <th scope="col">Desc</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = 'select * from note';
          $result = mysqli_query($conn, $sql);
          
          $num = mysqli_num_rows($result);
          // $aff = mysqli_affected_rows($result);
          // echo "The number os rwos are affected" .var_dump($num) ."<br>";
          // echo "The number os rwos are affected" .var_dump($aff) ."<br>";
          if ($num>0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "   <tr>
                            <th scope='row'>".$row['sno']."</th>
                            <td>" .$row['title']. "</td>
                            <td>".$row['description']."</td>
                            <td><a href = './delete.php' ><button class='btn btn-primary mx-3'>Edit</button></a><a href = './edit.php' ><button class='btn btn-primary'>Delete</button></a></td>
                          </tr>";

        }
      }
    
        mysqli_close($conn);
        exit();
     ?>

      </tbody>
    </table>

  </div>
<?php
require('./includes/Footer.php');
?>