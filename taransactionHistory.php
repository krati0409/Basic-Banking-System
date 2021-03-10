<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Transaction History</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/table.css">
     <link rel="stylesheet" type="text/css" href="css/navbar.css">
 </head>
 
 <body>
 
 <?php
   include 'navbar.php';
 ?>
 
     <div class="container">
         <h2 class="text-center pt-4">Transaction History</h2>
         
        <br>
        <div class="table-responsive-sm">
     <table class="table table-hover table-striped table-condensed table-bordered">
         <thead>
             <tr>
                 <th class="text-center">S.No.</th>
                 <th class="text-center">Sender</th>
                 <th class="text-center">Receiver</th>
                 <th class="text-center">Amount</th>
                 
             </tr>
         </thead>
         <tbody>  
             <tr class="table-white">
                        <td scope="row">1</td>
                        <td>rahul verma</td>
                        <td>manoj kumar</td>
                        <td>
                            <p id="amount">4000</p>
                        </td>
                    </tr>
                    <tr class="table-white">
                        <td scope="row">2</td>
                        <td>shiv kumar</td>
                        <td>saroj verma</td>
                        <td>
                            <p id="amount">300</p>
                        </td>
                    </tr>
                    <tr class="table-white">
                        <td scope="row">3</td>
                        <td>shivani kanungo</td>
                        <td>pragya solanki</td>
                        <td>
                            <p id="amount">3000</p>
                        </td>
                    </tr>
                    <tr class="table-white">
                        <td scope="row">4</td>
                        <td>mansi dalal</td>
                        <td>sima chohan</td>
                        <td>
                            <p id="amount">500</p>
                        </td>
                    </tr>
                    <tr class="table-white">
                        <td scope="row">5</td>
                        <td>tina mishra</td>
                        <td>tiya salve</td>
                        <td>
                            <p id="amount">4000</p>
                        </td>
                    </tr>

                    <tr class="table-white">
                        <td scope="row">6</td>
                        <td>puja tiwari</td>
                        <td>vibha sharma</td>
                        <td>
                            <p id="amount">2000</p>
                        </td>
                    </tr>

                 <tr class="table-white">
                        <td scope="row">7</td>
                        <td>sanket joshi</td>
                        <td>abhishek solanki</td>
                        <td>
                            <p id="amount">6000</p>
                        </td>
                    </tr>

                    <tr class="table-white">
                        <td scope="row">8</td>
                        <td>anurag solanli</td>
                        <td>salony mishra</td>
                        <td>
                            <p id="amount">5000</p>
                        </td>
                    </tr>
                    <tr class="table-white">
                        <td scope="row">9</td>
                        <td>mukesh kuumar</td>
                        <td>siya manohar</td>
                        <td>
                            <p id="amount">8000</p>
                        </td>
                    </tr>
                    <tr class="table-white">
                        <td scope="row">10</td>
                        <td>nilu kumrawat</td>
                        <td>tina salve</td>
                        <td>
                            <p id="amount">9000</p>
                        </td>
                    </tr>



         <?php
        
                 
         include 'config.php';

         $sql ="select * from transactionHisory";

         $query =mysqli_query($conn, $sql);

         while($rows = mysqli_fetch_assoc($query))
         {
      ?>

         
 
             <tr>
             <td class="py-2"><?php echo $rows['sno']; ?></td>
             <td class="py-2"><?php echo $rows['sender']; ?></td>
             <td class="py-2"><?php echo $rows['receiver']; ?></td>
             <td class="py-2"><?php echo $rows['amount']; ?> </td>
             </tr>
                 
         <?php
             }
 
         ?>
         </tbody>
     </table>
 
     </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 </body>
 
