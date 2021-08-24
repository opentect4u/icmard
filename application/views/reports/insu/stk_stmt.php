<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid #dddddd;

    padding: 6px;

    font-size: 14px;
}

th {

    text-align: center;

}

tr:hover {background-color: #f5f5f5;}

</style>

<script>
  function printDiv() {

        var divToPrint = document.getElementById('divToPrint');

        var WindowObject = window.open('', 'Print-Window');
        WindowObject.document.open();
        WindowObject.document.writeln('<!DOCTYPE html>');
        WindowObject.document.writeln('<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title><style type="text/css">');


        WindowObject.document.writeln('@media print { .center { text-align: center;}' +
            '                                         .inline { display: inline; }' +
            '                                         .underline { text-decoration: underline; }' +
            '                                         .left { margin-left: 315px;} ' +
            '                                         .right { margin-right: 375px; display: inline; }' +
            '                                          table { border-collapse: collapse; font-size: 12px;}' +
            '                                          th, td { border: 1px solid black; border-collapse: collapse; padding: 6px;}' +
            '                                           th, td { }' +
            '                                         .border { border: 1px solid black; } ' +
            '                                         .bottom { bottom: 5px; width: 100%; position: fixed ' +
            '                                       ' +
            '                                   } } </style>');
        WindowObject.document.writeln('</head><body onload="window.print()">');
        WindowObject.document.writeln(divToPrint.innerHTML);
        WindowObject.document.writeln('</body></html>');
        WindowObject.document.close();
        setTimeout(function () {
            WindowObject.close();
        }, 10);

  }
</script>




    

        <!-- <div class="wraper"> 

            <div class="col-lg-12 container contant-wraper"> -->
            <div class="main-panel">
		<div class="content-wrapper">  
                <div id="divToPrint">

                    <div style="text-align:center;">

                        <h2>ICMARD.</h2>
                        <!-- <h4>HEAD OFFICE: SOUTHEND CONCLAVE, 3RD FLOOR, 1582 RAJDANGA MAIN ROAD, KOLKATA-700107.</h4> -->
                        <!-- <h4>Tenant Details Between: <?php echo $_SESSION['date']; ?></h4> -->
                        <h4>Insurance Details </h4>
                        <!-- <h5 style="text-align:left"><label>District: </label> <?php echo $branch->district_name; ?></h5> -->

                    </div>
                    <br>  

                    <table style="width: 100%;" id="example">

                        <thead>

                            <tr>
                            <!-- stake holder name,item,item srl,item location,amc st date,amc end dt,amount,taxable value,net amt -->
                                <th>Sl No.</th>

                                <th>Name Of Equipment</th>

                                <th>Period From</th>

                                <th>Period To</th>

                                <th>Remarks</th>
                                
                                <th>Authority Of Concern</th>
                                
                            </tr>

                        </thead>

                        <tbody>

                            <?php

//  print_r($opening);
//  exit;
                                if($tenant){ 

                                    $i = 1;
                                    $total = 0.00;
                                    $val =0;

                                        foreach($tenant as $tdtls){
                            ?>

                                <tr class="rep">
                                     <td class="report"><?php echo $i++; ?></td>
                                     <td class="report"><?php echo $tdtls->item_name; ?>

                                     <td class="report"><?php echo $tdtls->frm_dt; ?>

                                     <td class="report"><?php echo $tdtls->to_dt; ?>

                                     <td class="report"><?php echo $tdtls->remarks; ?>

                                     <td class="report"><?php echo $tdtls->auth_person; ?>

                                   
                                     <!-- <td class="report opening" id="opening">
                                        <?php 
                                            foreach($opening as $opndtls){
                                                if($prodtls->prod_id==$opndtls->prod_id){
                                                    echo $opndtls->opn_qty;
                                                }
                                            }
                                        ?>
                                     </td> -->
                                     <!-- <td class="report purchase" id="purchase">
                                        <?php 
                                            foreach($purchase as $purdtls){
                                                if($prodtls->prod_id==$purdtls->prod_id){
                                                    echo $purdtls->tot_pur;
                                                }
                                            }
                                        ?>
                                     </td> -->
                                     <!-- <td class="report sale" id="sale">
                                        <?php 
                                            foreach($sale as $saledtls){
                                                if($prodtls->prod_id==$saledtls->prod_id){
                                                    echo $saledtls->tot_sale;
                                                }
                                            }
                                        ?>
                                     </td> -->

                                     <!-- <td class="report closing" id="closing">
                                        <?php 
                                        foreach($opening as $opndtls){
                                            if($prodtls->prod_id==$opndtls->prod_id){
                                                echo $opndtls->cls_qty;
                                            }
                                        }
                                        
                                           
                                        ?>
                                     </td> -->
                                   
                                </tr>
 
                                <?php  
                                                        
                                    }
                                ?>

 
                                <?php 
                                       }
                                else{

                                    echo "<tr><td colspan='14' style='text-align:center;'>No Data Found</td></tr>";

                                }   

                            ?>

                        </tbody>

                    </table>

                </div>   
                
                <div style="text-align: center;">

                    <button class="btn btn-primary" type="button" onclick="printDiv();">Print</button>
                   <!-- <button class="btn btn-primary" type="button" id="btnExport" >Excel</button>-->

                </div>

            </div>
            
        </div>
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" rel="stylesheet" />

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<!-- <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script> -->
<!-- <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script> -->

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

<script>
   $('#example').dataTable({
    destroy: true,
   searching: false,ordering: false,paging: false,

dom: 'Bfrtip',
buttons: [
   {
extend: 'excelHtml5',
title: 'ICMARD INSURANCE REPORT',
text: 'Export to excel'
//Columns to export
// exportOptions: {
//    columns: [0, 1, 2, 3]
// }
   }
]
   });
</script>