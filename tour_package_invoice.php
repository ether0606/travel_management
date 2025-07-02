<?php include_once('includes/connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tour_package-_booking_invoice</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgb(238, 247, 249);
            
            color: #333;
            margin: auto;
            
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }


        img {
            vertical-align: middle;
            margin-right: 10px;
        }
        .A{ background-color: skyblue;
            padding: 10px;
            border-radius: 8px;
        
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 15px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th {
            background-color: #f0f0f0;
            font-weight: 600;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 10px;
        }

        tr:nth-child(even) td {
            background-color: #fafafa;
        }

        ul {
            margin-top: 10px;
            padding-left: 20px;
        }

        p, b {
            font-size: 15px;
            line-height: 1.6;
        }

        strong {
            display: block;
            margin-top: 5px;
        }

        @media print {
            body {
                background: none;
                margin: 0;
            }

            div {
                box-shadow: none;
                padding: 0;
                max-width: 100%;
            }

            table, th, td {
                font-size: 13px;
            }
            .no-print {
                display: none;
            }
        }


    </style>
</head>
<body>

<?php
    $booking_id = $_GET['id'];
    $res=$mysqli->common_query("SELECT tour_package_booking.*,user.full_name,user.contact,user.address, tour_packages.title FROM `tour_package_booking` 
                                JOIN user on user.id=tour_package_booking.user_id
                                JOIN tour_packages on tour_packages.id=tour_package_booking.tour_id
                                where tour_package_booking.id='".$booking_id."'");

    $data=$res['data'][0];
?>
    <h1 text align="center">Invoice</h1>
    <a href="<?= $baseurl ?>">Go to Home Page</a>
    <button class="no-print" onclick="window.print()">Print</button>
        <div class="A">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" style="border-collapse: collapse;border:0">
                <tr style="border:0">
                    <td style="border:0">
                        <img src="admin/assets/images/logo/logo2.png" height="20px" width="20px"alt="logo2">
                        <strong>TripTasy</strong>
                        <strong>+1 (300) 1234 6543</strong>
                        <strong>triptasy@gmail.com</strong>
                        <strong>Khulsi 336/A ,Chattogram,Bangladesh</strong>
                    </td>
                    <td style="border:0">
                        <div>
                            <b>Invoice Date: <?= date('d-m-Y h:i:s a',strtotime($data->booking_date)) ?></b>|<b>Invoice Number: INV-<?= str_pad($data->id,6,0,STR_PAD_LEFT) ?></b><br>
                            <b>Client Name:</b> <?= $data->full_name ?><br>
                            <b>Client Contact:</b> <?= $data->contact ?>
                        </div>
                    </td>
                </tr>
            </table>
            
        </div> 
<br><br>

<br>
<div>
    <table cellspacing="0" border="1">
        <tbody>
           <tr>
                <th>Description of service</th>
                  <th>Quantity</th>
                    <th>Unit Price</th>
                    <th >Total</th>
            </tr>
            <tr>
                <td ><?= $data->title ?></td>
                <td > <?= $data->qty ?></td>
                <td> <?= $data->total_amount / $data->qty ?></td>
                <td> <?= $data->total_amount ?></td>
            </tr>

            
           
            <tr>
                <th colspan="3">Subtotal</th>
                 <td><?= $data->total_amount ?></td>
            </tr>
           <tr>
                <th colspan="3">Tax</th>
                 <td></td>
            </tr>
    
            <tr>
                <th colspan="3">Total Amount </th>
                <td><?= $data->total_amount ?></td> 
            </tr>
        </tbody>
    </table>
    <br>
    <p>
    <b>Payment Information:</b><br>
    Please make payments via bank transfer to the following account:
    </p>
    <ul>
        <li>
            <b>Account Name:triptasy</b>
        </li>
          <li>
            <b>Account Number:0000 13400 1223</b>
        </li>
         <li>
            <b>Bank Name:Basic bank</b> |
           
            <b>Routing Number:143</b>
        </li>
    </ul>
    <p>
        <b>Terms and Conditions:</b>
        <br>
        All sales are final. Refunds will be processed according to hotel policies. Payments are due within 30 days of the invoice date.
    </p>
    <p>
        For any questions or further assistance, feel free to reach out to 
        <b>Jerin</b> at <b>jerin@gmail.com</b>
    </p>


</div>
</body>
</html>