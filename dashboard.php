<?php 
include 'mainheader.php';
?>
	
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">



	<!-- Content -->
	<div class="page-wrapper bg-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
				<div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-btc" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>$ 76,598</h3>
								<span class="widget-title1">BTC <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-eur" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>$ 21,072</h3>
                                <span class="widget-title2">Ethereum <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-rub" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>$ 45,572</h3>
                                <span class="widget-title3">Ripple <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-ils" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>$ 67,618</h3>
                                <span class="widget-title4">Cardeno <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg4"><i class="fa fa-krw" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>$ 32,598</h3>
								<span class="widget-title4">Litecoin <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-jpy" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>$ 41,072</h3>
                                <span class="widget-title3">NEO <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-try" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>$ 22,334</h3>
                                <span class="widget-title2">Stellar <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i class="fa fa-jpy" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>$ 18,234</h3>
                                <span class="widget-title1">EOS <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="row">	
					<div class="col-sm-6">
						<div class="buy-form">
							<h4 class="page-title">Bar Graph</h4>
							<canvas id="bargraph"></canvas>
						</div>
                    </div>
                 </div>
							
                <div class="row">
                    <div class="col-md-12">
						<div class="buy-form">
						<h4 class="page-title">PROJECT SUMMARY</h4>
							<div class="table-responsive">
								<table class="datatable table table-striped custom-table">
									<thead>
										<tr>
											<th>S/N</th>
											<th>Activity</th>
											<th style="min-width:110px;">Male</th>
											<th style="min-width:110px;">Female</th>
											<th style="min-width:110px;">Total</th>
											<th style="min-width:110px;">Remark</th>
											<th style="min-width:90px;">PI</th>
											<th style="min-width:90px;"> PM</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><img width="28" height="28" src="assets\img\bitcoin.png" class="rounded-circle" alt=""> </td>
											<td>Exposed DTP</td>
											<td> 11,723.40</td>
											<td> 197,078,267,295</td>
											<td> 17,950,900,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"><i class="fa fa-arrow-up" aria-hidden="true"></i> 263.54 %</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>
											<img width="28" height="28" src="assets\img\ethereum.png" class="rounded-circle" alt=""> 
											</td>
											<td>Exposed Catch up</td>
											<td>1,070.39</td>
											<td>103,892,495,504</td>
											<td>7,564,310,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"> <i class="fa fa-arrow-up" aria-hidden="true"></i> 26.13%</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<img width="28" height="28" src="assets\img\ripple.png" class="rounded-circle" alt=""> 
											</td>
											<td>Ripple</td>
											<td>$ 1.64</td>
											<td>$ 63,391,183,730</td>
											<td>$ 10,143,400,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"><i class="fa fa-arrow-up" aria-hidden="true"></i> 66.62%</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<img width="28" height="28" src="assets\img\litecoin.png" class="rounded-circle" alt=""> 
											</td>
											<td>Litecoin</td>
											<td>$ 198.88</td>
											<td>$ 10,901,285,520</td>
											<td>$ 1,235,390,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"><i class="fa fa-arrow-up" aria-hidden="true"></i>  26.96%</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										 <tr>
											<td><img width="28" height="28" src="assets\img\bitcoin.png" class="rounded-circle" alt=""> </td>
											<td>Bitcoin</td>
											<td>$ 11,723.40</td>
											<td>$ 197,078,267,295</td>
											<td>$ 17,950,900,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"><i class="fa fa-arrow-up" aria-hidden="true"></i> 263.54 %</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>
											<img width="28" height="28" src="assets\img\ethereum.png" class="rounded-circle" alt=""> 
											</td>
											<td>Ethereum</td>
											<td>$ 1,070.39</td>
											<td>$ 103,892,495,504</td>
											<td>$ 7,564,310,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"> <i class="fa fa-arrow-up" aria-hidden="true"></i> 26.13%</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<img width="28" height="28" src="assets\img\ripple.png" class="rounded-circle" alt=""> 
											</td>
											<td>Ripple</td>
											<td>$ 1.64</td>
											<td>$ 63,391,183,730</td>
											<td>$ 10,143,400,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"><i class="fa fa-arrow-up" aria-hidden="true"></i> 66.62%</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										<tr>
											<td>
												<img width="28" height="28" src="assets\img\litecoin.png" class="rounded-circle" alt=""> 
											</td>
											<td>Litecoin</td>
											<td>$ 198.88</td>
											<td>$ 10,901,285,520</td>
											<td>$ 1,235,390,000</td>
											<td>16 973 112</td>
											<td>
												<span class="custom-badge status-green"><i class="fa fa-arrow-up" aria-hidden="true"></i>  26.96%</span>
											</td>
											<td class="text-center">
												<a href="chartjs.html" class="graph-price">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
				
				
			
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
      </div>
	<!-- Content End -->

					    
	<script>
	
