<?php
include('partials/menu.php');
?>

 <!-- main content section start  -->
 <div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        
        <br /><br/>

            <?php 
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                }
            ?>
        <!-- button to add admin -->

        <a href="add_admin.php" class="btn-primary">Add Admin</a>

        <br/><br/><br/>
            <table class="tbl-full">
                <tr>
                    <th>Sr. No.</th>
                    <th>Full name</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>1.</td>
                    <td>Jeny</td>
                    <td>Jenypatel</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>  
                        <a href="#" class="btn-danger">Delete Admin</a>   
                    
                        
                    </td>
                </tr>

                 <tr>
                    <td>2.</td>
                    <td>Jeny</td>
                    <td>Jenypatel</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>  
                        <a href="#" class="btn-danger">Delete Admin</a>     
                    </td>
                </tr>

                 <tr>
                    <td>3.</td>
                    <td>Jeny</td>
                    <td>Jenypatel</td>
                    <td>
                        <a href="#" class="btn-secondary">Update Admin</a>  
                        <a href="#" class="btn-danger">Delete Admin</a>     
                    </td>
                </tr>
            </table>


    </div>
</div>
 <!-- main content section end  -->

 <?php
 include('partials/footer.php');
 ?>