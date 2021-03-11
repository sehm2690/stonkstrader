
<?php
    include_once'header.php'
?>
    <main>
        
        <!-- Middle portion of webpage -->
        <div class="container text-center">
            <div class="row">
                <table border=1 id="stock-portfolio-table" class="table1 bdr1">
                    <thead>
                        <tr>
                            <th colspan="2" class="header"></th>
                            <th class="txt header">Symbol</th>
                            <th class="txt header">Description</th>
                            <th class="num header">Qty</th>
                            <th class="num header">Purchase Price</th>
                            <th class="num header">Current Price</th>
                            <th class="num header">Total Value</th>
                            <th class="num header">Today's Change</th>
                            <th class="num header">Total Gain/Loss</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $row1 = array("MPC","MARATHON PETROLEUM CORP", 10,17.99,58.13, 581.80, 22.60, 401.90);
                            $row2 = array("FSR", "FISKER INC", 20, 11.75, 24.44, 235.80, 20.04,209.08);
                            $row3 = array('AAPL', 'APPLE INC', 12, 59.09, 119.98, 1439.76, 60.50 ,730.68);
                            $rows = array($row1,$row2,$row3);
                            $i = 0;
                            $total_rows = 3; 
                            while ($i < $total_rows){
                                echo "<tr>";
                                echo' <td> <div class="detailButton btn-expand close" id="PS_LONG_0" data-symbol="MPC"
                                        data-portfolioid="6265363" data-stocktype="long"></div>
                                        </td>';
                                echo '<td><a href="#"></a><a
                                        href="https://www.investopedia.com/simulator/trade/tradestock.aspx?too=2&amp;Sym=MPC&amp;Qty=10">Sell</a>
                                        </td>';
                                echo "<td>". $rows[$i][0] ."</td>" ;
                                echo "<td>". $rows[$i][1] ."</td>" ;
                                echo '<td class="num">'. $rows[$i][2] ."</td>" ;
                                echo '<td class="num">'. $rows[$i][3] ."</td>" ;
                                echo '<td class="num">'. $rows[$i][4] ."</td>" ;
                                echo '<td class="num">'. $rows[$i][5] ."</td>" ;
                                echo '<td class="num">'. $rows[$i][6] ."</td>" ;
                                echo '<td class="num">'. $rows[$i][7] ."</td>" ;

                                echo"</tr>";
                                
                                $i++;

                            }
                        
                        
                        ?>
                       
                    </tbody>
                    <tbody>
                        <tr class="no-border">
                            <td></td>
                            <td colspan="5" class="num"></td>
                            <td class="num"><strong>Total</strong></td>
                            <td class="num">$823,845.05</td>
                            <td class="num up">$2,242.97(0.27 %)</td>
                            <td class="num up">$801,812.64 (3,639.24 %)</td>
                        </tr>

                    </tbody>
                </table>
                <br></br>
               
            </div>
        </div>

    

    </main>

    

<?php
    include_once'footer.php'
?>