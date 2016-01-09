<?php 
include_once("config/config.php");
include_once("login_check.php");
include_once("templates/header.php");?>
<section id="form" class="bg-light-gray set_minimum_height">
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12">
				<ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#calendar">Calendar</a></li>
                    <li><a data-toggle="tab" href="#lecture">Lectures</a></li>
                    <li><a data-toggle="tab" href="#guest">Guest Speakers</a></li>
					<li><a data-toggle="tab" href="#intern">Internships/Opportunities</a></li>
				</ul>
				<div class="tab-content">
                    <div id="calendar" class="tab-pane fade in active">
                    	<div class="container">
                        	<div class="row">
                            	<div class="col-lg-12" align="center"><br/><h3 align="center">Welcome, <?php echo $_SESSION[SESSION_USERNAME];?>!!</h3><br/><br/></div>
                            </div>
                        	<div class="row">
                            	<div class="col-lg-7">
                                	<div class="calendar">
                                        <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=yaleudi%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border:solid 1px #777 " width="650" height="400" frameborder="0" scrolling="no">
                                        </iframe><br/><br/>
                                    </div>
                                    <div class="import" align="center">
                                		<a href="assets/downloads/basic-2.ics"><button type="button" class="btn btn-primary btn-lg" >Import Calendar</button></a>
                                    </div>
								</div>
                                <div class="col-lg-5">
                                	<div class="announcements">
                                    	<h2 align="center">ANNOUNCEMENTS</h2>
                                        <ul>
                                        	<li>Potentially will add some announcements here</li>
                                        	<li>Maybe superfluous with alertbar though</li>
                                        	<li>Not sure how to deal with blank space</li>
                                        </ul>
                                    </div>
                                    <div class="marketwatch" align="center">
										<button type="button" class="btn btn-primary btn-lg">Go To Market Watch</button>
                                    </div>
                                </div>
                            </div>
						</div>
                    	
                    </div>
                    <div id="lecture" class="tab-pane fade">
                    	<div class="container text-center">
        <div class="row">
              <div class="col-lg-12">
                <h1 class="curriculum__head">Curriculum</h1>
              </div>
        </div>
        <div class="row">
              <div class="col-lg-4 col-lg-offset-4">
                <div class="curriculum__head">
                  <p class="curriculum__title">Fall 2014</p>
                </div>
              </div>
        </div><br>
        <div class="row">
          <div class="col-sm-2"></div>
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/stocks.jpg" alt="Introduction to the Basic Concepts of Finance" class="img-responsive faded"></a>
                  <p class="black-text"><b>Introduction to the Basic Concepts of Finance</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="lectures/lecture1.pdf" target="_blank" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="https://www.youtube.com/watch?v=53MnV_-vCUo" target="_blank" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          <div class="col-sm-2"></div>
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/sprout.jpg" alt="Portfolio Construction and Management" class="img-responsive faded"></a>
                  <p class="black-text"><b>Portfolio Construction and Management</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="lectures/lecture2.pdf" target="_blank" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="https://www.youtube.com/watch?v=erB3G8aJepQ" target="_blank" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
              <div class="col-lg-4 col-lg-offset-4">
                <div class="curriculum__head">
                  <p class="curriculum__title">Spring 2015</p>
                </div>
              </div>
        </div>
        <div class="row">
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/wall_street.jpg" alt="Developing Investment Strategy" class="img-responsive faded"></a>
                  <p class="black-text"><b>Developing Investment Strategy</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="lectures/lecture3.pdf" target="_blank" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/balance.jpg" alt="Interpreting SEC Filings: Intro" class="img-responsive faded"></a>
                  <p class="black-text"><b>Interpreting SEC Filings: Intro</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="lectures/lecture4.pdf" target="_blank" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="https://www.youtube.com/watch?v=53MnV_-vCUo" target="_blank" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/cash.jpg" alt="Fundamental vs Technical Analysis" class="img-responsive faded"></a>
                  <p class="black-text"><b>Fundamental vs Technical Analysis</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/managing.jpg" alt="Discounted Cash Flow: Intro" class="img-responsive faded"></a>
                  <p class="black-text"><b>Discounted Cash Flow: Intro</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="row">
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/techan.jpg" alt="Deeper Understanding of Technical Analysis" class="img-responsive faded"></a>
                  <p class="black-text"><b>Deeper Understanding of Technical Analysis</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/investing.jpg" alt="Investing in Diversified Markets" class="img-responsive faded"></a>
                  <p class="black-text"><b>Investing in Diversified Markets</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="team-member"><a><img src="assets/img/labels/man_walking.jpg" alt="Managing Money and Expectations" class="img-responsive faded"></a>
                  <p class="black-text"><b>Managing Money and Expectations</b></p>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Slides</a>
                      </p>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4">
                      <p><a href="#" disabled="disabled" role="button" class="btn btn-primary">Video</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
                    </div>
                    <div id="guest" class="tab-pane fade">
						<div class="container">
        <div class="row">
              <div class="col-lg-12 text-center">
                <h1 class="team__head">Guest Lectures</h1>
              </div>
        </div>
        <div class="row">
              <div class="col-lg-4 col-lg-offset-4">
                <div class="guest__header">
                  <p class="guest__title">Spring 2015</p>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-sm-2"></div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer01" class="portfolio-link"><img alt="" src="assets/img/lectures/olson.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Rory Olson</h4>
                  <p class="lecture__p">CEO @ Wall Street Survivor<em></em></p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer02" class="portfolio-link"><img alt="" src="assets/img/lectures/anthonyg.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Anthony Garcia</h4>
                  <p class="lecture__p">BDC @ Morgan Stanley, Merrill Lynch (past)<em></em></p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer03" class="portfolio-link"><img alt="" src="assets/img/lectures/andrew.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Andrew Bhak</h4>
                  <p class="lecture__p">Managing Director @ Deutsche Bank<em></em></p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer04" class="portfolio-link"><img alt="" src="assets/img/lectures/spitzley.png" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Ray Spitzley</h4>
                  <p class="lecture__p">Managing Director @ Fidelity<em></em></p>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-sm-3"></div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer05" class="portfolio-link"><img alt="" src="assets/img/lectures/moore.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Jeff Moore</h4>
                  <p class="lecture__p">Porfolio Manager @ Fidelity<em></em></p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer06" class="portfolio-link"><img alt="" src="assets/img/lectures/zhang.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Frank Zhang</h4>
                  <p class="lecture__p">Securities Analysis @ YSOM<em></em></p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer07" class="portfolio-link"><img alt="" src="assets/img/lectures/spiegel.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Matthew Spiegel</h4>
                  <p class="lecture__p">Yale SOM<em></em></p>
                </div>
              </div>
        </div>
        <div class="row">
              <div class="col-lg-4 col-lg-offset-4">
                <div class="guest__header">
                  <p class="guest__title">Fall 2014</p>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-sm-4"></div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer08" class="portfolio-link"><img alt="" src="assets/img/lectures/nickbar.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Keith Barberis</h4>
                  <p class="lecture__p">Professor @ YSOM<em></em></p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="team-member"><a data-toggle="modal" href="#lecturer09" class="portfolio-link"><img alt="" src="assets/img/lectures/zusi.jpg" class="img-responsive img-circle"></a>
                  <h4 class="lecture__h">Keith Zusi</h4>
                  <p class="lecture__p">S&amp;T @ Goldman Sachs<em></em></p>
                </div>
              </div>
        </div>
      </div>
                    </div>
					<div id="intern" class="tab-pane fade">
                    	<h3>Under development</h3>
                    </div>
				</div>
            </div>
        </div>
	</div>
</section>
    <!-- Olson Bio-->
        <div id="lecturer01" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Rory Olson</h1>
                  <h4>CEO @ Wall Street Survivor</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Rory Olson" src="assets/img/lectures/olson.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Rory Olson is a highly accomplished entrepreneur and public company executive with a proven track record of having founded, restructured and operated various companies from start-up stage to mature public company. Mr. Olson is the founder and Chief Executive Officer of Wall Street Survivor whose mission is to promote financial literacy. Prior to that, he served as Chief Operating Officer of privately held Airborne Entertainment Inc., where in addition to making an investment he was responsible for the day-to-day operations of the mobile content publisher. He founded and served as Chief Executive Officer of TeleNet Communications in the early nineties, a pioneer in Canada’s re-sale long distance industry. </p>
                    <p>Within 2 years he grew TeleNet’s billing base to in excess of $40 million per annum, and later sold to a US-based carrier. Mr. Olson then co-founded TotalNet Inc. in the mid-nineties, which grew to become Canada’s largest and most successful, privately owned ISP. In 1998, he engineered its sale to IMPACT Immedia, where he held the position of Executive Vice President and Chief Operating Officer. Among Mr. Olson’s major accomplishments was the structuring and creation of BCE Emergis (a joint venture between BCE Inc and MPACT), which, under his stewardship as Executive Vice President of Business Development, went on to become Canada's foremost electronic commerce company. Subsequent to that he was a founding member of SureFire Commerce an Internet based payment processing company, as well as its President and Chief Executive Officer until its sale in 2002.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Garcia-->
        <div id="lecturer02" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Anthony Garcia</h1>
                  <h4>BDC @ Morgan Stanley, Merrill Lynch (past)</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Anthony Garcia" src="assets/img/lectures/anthonyg.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Mr. Garcia graduated from Princeton (BA Economics) and Harvard (MBA) and worked as an investment banker at Morgan Stanley, Merrill Lynch and Lehman Brothers. He served for 20 years as an independent director of Allied Capital (including service on the Audit Committee as a financial expert and as Chairman of the Compensation Committee) until Ares Capital acquired the company. He has also served as Director of Finance for several business ventures that raised capital from venture funds and angel investors. Mr. Garcia spent over 20 years in the BDC arena as an investment banker raising funds for BDCs and as an independent director of a BDC with a market cap of $5 billion. He will discuss the BDC investment process and compare it to other forms of making investments such as private equity, venture capital and angel investing.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Bhak Bio-->
        <div id="lecturer03" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Andrew Bhak</h1>
                  <h4>Managing Director @ Deutsche Bank</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Andrew Bhak" src="assets/img/lectures/andrew.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Bio currently unavailable</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Spitzley Bio-->
        <div id="lecturer04" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Ray Spitzley</h1>
                  <h4>Managing Director @ Fidelity</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Ray Spitzley" src="assets/img/lectures/spitzley.png" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Ray Spitzley is a senior managing director in Morgan Stanley’s Global Power and Utility Group. Based in New York, Mr. Spitzley has more than 30 years of investment banking experience with a range of clients in North America, Europe and Asia. From 1993-2000, Mr. Spitzley headed Morgan Stanley’s Power and Energy banking efforts in Asia Pacific via postings in Hong Kong, Singapore, and Sydney. In 2001, Mr. Spitzley returned to New York to take responsibility for Morgan Stanley’s coverage efforts with generation-focused power and utility clients in North America. He has been a Managing Director of Morgan Stanley since 1995. Mr. Spitzley is a graduate of Denison University and received his Masters in Public and Private Management from Yale University.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Moore Bio-->
        <div id="lecturer05" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Jeff Moore</h1>
                  <h4>Porfolio Manager @ Fidelity</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Jeff Moore" src="assets/img/lectures/moore.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Jeffrey Moore is a portfolio manager in the Fixed Income division at Fidelity Management & Research Company (FMRCo), the investment advisor for Fidelity’s family of mutual funds. Fidelity Investments is a leading provider of investment management, retirement planning, portfolio guidance, brokerage, benefits outsourcing and other financial products and services to more than 20 million individuals, institutions and financial intermediaries. In this role, he manages portfolios across retail and institutional assets, including Tactical Bond, Core and Core Plus, and Global strategies.</p>
                    <p>Prior to assuming his current role as portfolio manager in 2000, Jeff was a fixed income analyst assigned to several sectors, including sovereign debt, energy, REITs, Yankee banks, and Canada. Before joining the firm in 1995, he was a credit analyst for Dominion Bond Rating Service. Prior to that, he worked for the Department of Finance of the Canadian government from 1990 to 1994. He has been in the investments industry since 1990.</p>
                    <p>Jeff earned his bachelor of arts degree in economics from the University of Western Ontario and his master’s degree in economics from the University of Waterloo. He is a Chartered Financial Analyst (CFA) charterholder. Jeff has authored a number of Thought Leadership papers, most recently “Active Multi-Sector Fixed Income Investing in an Uncertain Yield Environment”(2013), “Stretching for Yield in the Fixed Income Market” (2012), and “What Does Risk Free Mean Now?” (2012). In Canada, Jeffauthored the paper “The Art and Science of Fixed Income” in 2009, and co-authored the paper “The Social Cost of Labor Taxes”for the Canadian Tax Journal in 1990.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Zhang Bio-->
        <div id="lecturer06" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Frank Zhang</h1>
                  <h4>Securities Analysis @ YSOM</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Frank Zhang" src="assets/img/lectures/zhang.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Frank Zhang is a Professor of Accounting at the School of Management. He worked as a vice president at Allianz Global Investors Capital from July 2008 to January 2010. Prior to that, he briefly worked at the Goldman Sachs Group and the Citadel Investment Group. Professor researches, including stock anomalies, fundamental analysis, investor and analyst behavior, and firm financial Zhang 's research focuses on empirical capital market reporting strategies. He is interested in both rational and behavioral approaches in studying stock anomalies and cross-sectional variations in stock returns.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Spiegel Bio-->
        <div id="lecturer07" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Matthew Spiegel</h1>
                  <h4>Yale SOM</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Matthew Spiegel" src="assets/img/lectures/spiegel.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>(Bio coming soon.)</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Barberis Bio-->
        <div id="lecturer08" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Keith Barberis</h1>
                  <h4>Professor @ YSOM</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Keith Barberis" src="assets/img/lectures/nickbar.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Professor Barberis’ research focuses on behavioral finance—in particular, on applications of cognitive psychology to understanding investor trading behavior and the pricing of financial assets. He has published extensively in the top economics and finance journals, gives frequent presentations about his work to both academic and non-academic audiences, and has won numerous awards for both research and teaching. Prior to coming to Yale, Professor Barberis taught at the Booth School of Business at the University of Chicago.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Zusi Bio-->
        <div id="lecturer09" tabindex="-1" class="portfolio-modal modal fade">
          <div class="modal-content">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <h1>Keith Zusi</h1>
                  <h4>S&amp;T @ Goldman Sachs</h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-lg-4">
                  <div class="modal-body"><img alt="Keith Zusi" src="assets/img/lectures/zusi.jpg" class="img-thumbnail photoframe"></div>
                </div>
                <div class="col-lg-8">
                  <div class="modal-body text-left">
                    <p>Keith, like both his parents, was born and raised in Summit, NJ where he graduated from Summit High School in 1985. Keith graduated from the University of Arizona with a BS in Finance and a BS in Real Estate. He began his career in finance in 1990 with National Westminster Bank in New York; he spent time in the real estate, corporate finance & private wealth groups. In 1993, he joined BDS Securities Corp., a small broker dealer, as a salesman and in 1996, Keith joined Amroc Investments, the precursor to Avenue Investments, to work for Marc Lasry. Three years later, in 1999, Keith joined Salomon, Smith Barney (now Citigroup) to help start their Distressed Investing Group. In 2004, Keith was hired by Goldman Sachs to work in their Bank Loan Group where he is currently employed. In addition to his normal job responsibilities, Keith is involved in the on campus Goldman recruiting process for summer and full time analysts & associates as well as the Take Your Child to Work & the Community Teamworks Programs.</p>
                    <p>Keith, his wife of over twenty years and 4 children live several blocks from where he grew up as a child. The Summit community is a very significant part of his and his family’s lives. His oldest daughter graduated from Washington & Lee University in Lexington, Va & second daughter is currently a junior at Colby College in Maine. His two sons are in high school at the Pingry School in Martinsville, NJ. </p>
                    <p>Some of the community groups he has or is currently serving on include: The Summit Police Athletic League – President, Summit Jr. Baseball – President, Speak Up Summit – Board Member, Keith has served over 30 seasons as a youth football & baseball coach, he has served on the election committees of several local politicians, The Beacon Hill Club – Trustee, Summit Republican Convention Committee – member, Sigma Chi alumni advisor. In addition, Keith has been honored by the Boy Scouts of America & the City of Summit for his citizenship and contributions to his community as well as the University of Arizona’s business school – Mentor of the Year award. Finally, there are many other philanthropic & community groups Keith has participated as a volunteer for various projects & fundraisers over the years.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                  <button data-dismiss="modal" type="button" class="btn btn-primary btn-lg">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include_once("templates/footer.php");?>
