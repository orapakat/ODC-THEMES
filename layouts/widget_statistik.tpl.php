<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>  
                          <div class="widget widget_categories">
                            <h3 class="widget-title">Statistik Desa</h3>   
                            <script type="text/javascript">
							    $(function () {
							        var chart_widget;
							        $(document).ready(function () {
							          // Build the chart
							            chart_widget = new Highcharts.Chart({
							                chart: {
							                    renderTo: 'container_widget',
							                    plotBackgroundColor: null,
							                    plotBorderWidth: null,
							                    plotShadow: false
							                },
							                title: {
							                    text: 'Statistik Penduduk'
							                },
							          yAxis: {
							                title: {
							                  text: 'Jumlah'
							                }
							          },
							          legend: {
							            enabled:false
							          },
							          plotOptions: {
							            series: {
							              colorByPoint: true
							            },
							            column: {
							              pointPadding: 0,
							              borderWidth: 0
							            }
							          },
							            series: [{
							                type: 'column',
							                name: 'Populasi',
							                data: [
							            <?php  foreach($stat_widget as $data){?>
							              <?php if($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"){?>
							                ['<?php echo $data['nama']?>',<?php echo $data['jumlah']?>],
							              <?php }?>
							            <?php }?>
							                ]
							            }]
							          });
							        });

							    });
							    </script>
    							<div id="container_widget" style="width: 100%; height: 150px; margin: 0 auto"></div>
                          </div>